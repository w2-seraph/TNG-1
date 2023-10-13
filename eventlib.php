<?php
function showCustEvents($id) {
	global $tree, $admtext, $events_table, $eventtypes_table, $allow_edit, $allow_delete, $gotnotes, $gotcites, $dims, $mylanguage, $languages_path;

	$query = "SELECT display, eventdate, eventplace, info, $events_table.eventID as eventID 
		FROM $events_table, $eventtypes_table 
		WHERE parenttag = \"\" AND persfamID = \"$id\" AND gedcom = \"$tree\" AND $events_table.eventtypeID = $eventtypes_table.eventtypeID 
		ORDER BY eventdatetr, ordernum";
	$evresult = tng_query($query);
	$eventcount = tng_num_rows( $evresult );

	if( $evresult && $eventcount ) {
		while ( $event = tng_fetch_assoc( $evresult ) ) {
			$dispvalues = explode( "|", $event['display'] );
			$numvalues = count( $dispvalues );
			if( $numvalues > 1 ) {
				$displayval = "";
				for( $i = 0; $i < $numvalues; $i += 2 ) {
					$lang = $dispvalues[$i];
					if( $mylanguage == $languages_path . $lang ) {
						$displayval = $dispvalues[$i+1];
						break;
					}
				}
			}
			else
				$displayval = $event['display'];
			$info = cleanIt($event['info']);
			$rowspan = 0;
			if($info) $rowspan++;
			if($event['eventdate'] || $event['eventplace']) $rowspan++;
			if(!$rowspan) {
				$rowspan = 1;
				$info = "&nbsp;";
			}
			$truncated = substr($info,0,90);
			$info = strlen($info) > 90 ? substr($truncated,0,strrpos($truncated,' ')) . '&hellip;' : $info;

			$actionstr = $allow_edit ? "<a href=\"#\" onclick=\"return editEvent({$event['eventID']});\" title=\"{$admtext['edit']}\" class=\"smallicon admin-edit-icon\"></a>" : "";
			$actionstr .= $allow_delete ? "<a href=\"#\" onclick=\"return deleteEvent('{$event['eventID']}');\" title=\"{$admtext['text_delete']}\" class=\"smallicon admin-delete-icon\"></a>" : "&nbsp;";
			if(isset($gotnotes)) {
				$notesicon = !empty($gotnotes[$event['eventID']]) ? "admin-note-on-icon" : "admin-note-off-icon";
				$actionstr .= "<a href=\"#\" onclick=\"return showNotes('{$event['eventID']}','$id');\" title=\"{$admtext['notes']}\" id=\"notesicon{$event['eventID']}\" class=\"smallicon $notesicon\"></a>";
			}
			if(isset($gotcites)) {
				$citesicon = !empty($gotcites[$event['eventID']]) ? "admin-cite-on-icon" : "admin-cite-off-icon";
				$actionstr .= "<a href=\"#\" onclick=\"return showCitations('{$event['eventID']}','$id');\" title=\"{$admtext['sources']}\" id=\"citesicon{$event['eventID']}\" class=\"smallicon $citesicon\"></a>";
			}
			if($event['eventdate'] || $event['eventplace']) {
				echo "<tr class=\"row_{$event['eventID']}\" id=\"row_{$event['eventID']}_top\" valign=\"top\"><td rowspan=\"$rowspan\" class=\"pad5 botbrdr\">{$displayval}:</td>";
				echo "<td class=\"lightback pad5 rounded5\">{$event['eventdate']}&nbsp;</td><td class=\"lightback pad5 rounded5\">{$event['eventplace']}&nbsp;</td>";
				echo "<td class=\"lightback nw pad5 rounded5\" colspan=\"4\" rowspan=\"$rowspan\">$actionstr</td></tr>\n";
				if($info)
					echo "<tr class=\"row_{$event['eventID']}\" id=\"row_{$event['eventID']}_bot\"><td class=\"lightback pad5 rounded5\" colspan=\"2\">$info</td></tr>\n";
			}
			else {
				echo "<tr class=\"row_{$event['eventID']}\" id=\"row_{$event['eventID']}_top\" valign=\"top\">";
				echo "<td class=\"pad5 botbrdr\">{$displayval}:</td><td class=\"lightback pad5 rounded5\" colspan=\"2\">$info</td>";
				echo "<td class=\"lightback nw pad5 rounded5\" colspan=\"4\">$actionstr</td></tr>\n";
			}
			echo "</td>\n";
			echo "</tr>\n";
		}
		tng_free_result($evresult);
	}
}
?>