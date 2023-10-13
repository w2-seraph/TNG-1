<?php

//Replace all the "include" lines in your pre-5.x histories with the following lines (up to the next comment)
include( "../begin.php");   //Nuke users must include "../../../begin.php" here
if( !$cms['support'] )
	$cms['tngpath'] = "../";
include($cms['tngpath'] ."genlib.php");
include($cms['tngpath'] ."getlang.php");
include($cms['tngpath'] ."$mylanguage/text.php");
tng_db_connect($database_host,$database_name,$database_username,$database_password) or exit;
include($cms['tngpath'] ."checklogin.php");
include($cms['tngpath'] . "log.php" );
//end of new include lines

$logstring = "<a href=\"/histories/presidents.php\">The Presidents of the United States</a>";
writelog($logstring);
preparebookmark($logstring);

//Note: histories created this way may function differently that other histories when placed in an "album". If that is annoying to you, consider creating
//your history by pasting the text into Admin/Media/Body Text instead.

// Remove the comments (leading slashes) on the next line if you don't want the TNG menu icons to show on your history page.
//$flags[noicons] = true;
tng_header( "The Presidents of the United States", $flags ); 
?>

<style>
	#prestable {
		width: 100%;
		border-collapse: collapse;
	}
	#prestable TD { 
		padding: 8px; 
		border: 1px solid #999;
		width: 33%;
		vertical-align: top;
		white-space: nowrap;
	}

	#prestable *.header {
		margin-bottom: 0px;
		text-decoration: none;
	}
	#prestable P {
		text-align: right;
	}
	</style>
	
		<h1 style="margin-bottom: 0px;"><b>Presidents of the United States of America</b></h1>
    <span class=normal style="margin-left: 20px;">...and how they're related to my children</span><br /><br />
    <table id="prestable">
    <tr>
    	<td>
    			<img src="/photos/thumb_Gilbert_Stuart_Williamstown_Portrait_of_George_Washington.jpg" border="1" alt="President George Washington" width="80" height="95" class="smallimg" style="float:left;">
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779229088">
            <h1 class="header">George Washington</h1></a><span class="normal">1731 - 1799</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779229121">Martha Dandridge</a><br />
        		Vice President:  
                <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779229242">John Adams</a>
            </p>
       </td>
    	<td>
        	<img src="/photos/thumb_A_painting_of_President_John_Adams.jpg" border="1" alt="President John Adams" width="80" height="95" class="smallimg" style="float:left;"/>
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779229242">
            <h1 class="header">John Adams</h1></a><span class="normal">1735 - 1826</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779229243">Abigail Smith</a><br />
        		Vice President:  
                <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779326497">Thomas Jefferson</a>
            </p>
       </td>
    	<td>
        	<img src="/photos/thumb_503px-Thomas_Jefferson_by_Rembrandt_Peale%2C_1800.jpg" border="1" alt="President Thomas Jefferson" width="80" height="95" class="smallimg" style="float:left;">
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779326497">
            <h1 class="header">Thomas Jefferson</h1></a><span class="normal">1743 - 1826</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779326498">Martha Wayles</a><br />
        		Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558565578">Aaron Burr</a><br />
                Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558565613">George Clinton</a>
            </p>
       </td>
		</tr>
        <tr>
    	<td>
        	<img src="/photos/thumb_493px-James_Madison.jpg" border="1" alt="President James Madison" width="80" height="97" class="smallimg" style="float:left;">
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779326652">
            <h1 class="header">James Madison</h1></a><span class="normal">1751 - 1836</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779326653">Dorothea Payne</a><br />
                Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558565613">George Clinton</a><br />
                Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558565752">Elbridge Gerry</a>
            </p>
       </td>  
    	<td>
        	<img src="/photos/thumb_James_Monroe_White_House_portrait_1819.jpg" border="1" alt="President James Monroe" width="80" height="96" class="smallimg" style="float:left;">
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779326690">
            <h1 class="header">James Monroe</h1></a><span class="normal">1758 - 1831</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779326691">Elizabeth Kortright</a><br />
                Vice President: <a href="/relationship.php?generations=50&seeecondpersonID=I3&tree=fitzvalley&primarypersonID=I17558565901">Daniel D. Tompkins</a>
            </p>
       </td>    
    	<td>
        	<img src="/photos/thumb_433px-John_Quincy_Adams_-_copy_of_1843_Philip_Haas_Daguerreotype.jpg" border="1" alt="President John Quincy Adams" width="72" height="100" class="smallimg" style="float:left;">
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779229241">
            <h1 class="header">John Quincy Adams</h1></a><span class="normal">1767 - 1848</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558565950">Louisa Catherine Johnson</a><br />
                Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558566002">John C. Calhoun</a>
            </p>
       </td>      
    	</tr>
        <tr>
         <td>
        	<img src="/photos/thumb_245px-Andrew_Jackson_Daguerrotype.jpg" />
        	<!--<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558565288">-->
            <h1 class="header">Andrew Jackson</h1><!--</a>--><span class="normal">1767 - 1845</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558566048">Rachel Donelson</a><br />
                Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558566002">John C. Calhoun</a><br />
                Vice President: Martin Van Buren
            </p>
       </td>  
         <td>
        	<img src="/photos/thumb_250px-Martin_Van_Buren_edit.jpg" />
        	<!--<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558565289">-->
            <h1 class="header">Martin Van Buren</h1><!--</a>--><span class="normal">1782 - 1862</span>
     		<p class="normal">
            	First Lady: Hannah Hoes<br />
                Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558566125">Richard Mentor Johnson</a>
            </p>
       </td>  
    	<td>
        	<img src="/photos/thumb_225px-William_Henry_Harrison_daguerreotype.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779327465">
            <h1 class="header">William Henry Harrison</h1></a><span class="normal">1773 - 1841</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779327466">Anna Tuthill Symmes</a><br />
                Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779327515">John Tyler</a>
            </p>
       </td>   
        </tr>
        <tr>
    	<td>
        	<img src="/photos/thumb_250px-John_Tyler%2C_Jr.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779327515">
            <h1 class="header">John Tyler</h1></a><span class="normal">1790 - 1862</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558569919">Letitia Christian</a><br />
                First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558567472">Julia Gardiner</a>
            </p>
       </td> 
    	<td>
        	<img src="/photos/thumb_225px-Polkpolk.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779327601">
            <h1 class="header">James Knox Polk</h1></a><span class="normal">1795 - 1859</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558567563">Sarah Childress</a><br />
                Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558567728">George M. Dallas</a>
            </p>
       </td>       
    	<td>
        	<img src="/photos/thumb_240px-Zachary_Taylor_2.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779327522">
            <h1 class="header">Zachary Taylor</h1></a><span class="normal">1784 - 1850</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558567761">Margaret Mackall Smith</a><br />
                Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779327646">Millard Fillmore</a>
            </p>
       </td>          
        </tr>
        <tr>
     	<td>
        	<img src="/photos/thumb_225px-Fillmore.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779327646">
            <h1 class="header">Millard Fillmore</h1></a><span class="normal">1800 - 1874</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558570267">Abigail Powers</a>
            </p>
       </td>    
     	<td>
        	<img src="/photos/thumb_240px-Franklin_Pierce.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779230154">
            <h1 class="header">Franklin Pierce</h1></a><span class="normal">1804 - 1869</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779230150">Jane Means Appleton</a><br />
                Vice President:  William R. King
            </p>
       </td>      
     	<td>
        	<img src="/photos/thumb_240px-James_Buchanan_in_1860_-_Meade_Brothers.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779327776">
            <h1 class="header">James Buchanan</h1></a><span class="normal">1791 - 1868</span>
     		<p class="normal">
                Vice President:  <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558571206">John C. Breckinridge</a>
            </p>
       </td>    
        </tr>
        <tr>
     	<td>
        	<img src="/photos/thumb_245px-Abraham_Lincoln_head_on_shoulders_photo_portrait.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779327846">
            <h1 class="header">Abraham Lincoln</h1></a><span class="normal">1809 - 1865</span>
     		<p class="normal">
            	First Lady: Mary Ann Todd<br />
                Vice President:  <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558571219">Hannibal Hamlin</a><br />
                Vice President:  <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779327918">Andrew Johnson</a>
            </p>
       </td>     
     	<td>
        	<img src="/photos/thumb_250px-Andrew_Johnson_photo_portrait_head_and_shoulders%2C_c1870-1880-Edit1.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779327918">
            <h1 class="header">Andrew Johnson</h1></a><span class="normal">1808 - 1875</span>
     		<p class="normal">
            	First Lady: Eliza McCardle
            </p>
       </td>  
     	<td>
        	<img src="/photos/thumb_250px-Andrew_Johnson_photo_portrait_head_and_shoulders%2C_c1870-1880-Edit1.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779327956">
            <h1 class="header">Ulysses Simpson Grant</h1></a><span class="normal">1822 - 1885</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558571244">Julia Boggs Dent</a><br />
                Vice President: Schuyler Colfax<br />
                Vice President: Henry Wilson
            </p>
       </td>                      
        </tr>
        <tr>
     	<td>
        	<img src="/photos/thumb_225px-Rutherford_B_Hayes_-_head_and_shoulders.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779230215">
            <h1 class="header">Rutherford Birchard Hayes</h1></a><span class="normal">1822 - 1893</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779230216">Lucy Ware Webb</a><br />
                Vice President: William A. Wheeler
            </p>
       </td> 
     	<td>
        	<img src="/photos/thumb_245px-James_Abram_Garfield%2C_photo_portrait_seated.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779229522">
            <h1 class="header">James Abram Garfield</h1></a><span class="normal">1831 - 1881</span>
     		<p class="normal">
            	First Lady: Lucretia Rudolph<br />
                Vice President: Chester A. Arthur
            </p>
       </td>  
     	<td>
        	<img src="/photos/thumb_245px-Chester_A._Arthur_portrait_c1882.jpg" />
        	<!--<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779328135">-->
            <h1 class="header">Chester Alan Arthur</h1><!--</a>--><span class="normal">1829 - 1886</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779328134">Ellen Lewis Herndon</a><br />
           
            </p>
       </td>                        
        </tr>
        <tr>
      	<td>
        	<img src="/photos/thumb_245px-President_Grover_Cleveland_Restored.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779230281">
            <h1 class="header">Stephen Grover Cleveland</h1></a><span class="normal">1837 - 1908</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779230280">Frances Clara Folsom</a><br />
                Vice President: Thomas A. Hendricks<br />
                Vice President: Adlai E. Stevenson
            </p>
       </td>     
      	<td>
        	<img src="/photos/thumb_225px-Benjamin_Harrison%2C_head_and_shoulders_bw_photo%2C_1896.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779328138">
            <h1 class="header">Benjamin Harrison</h1></a><span class="normal">1833 - 1901</span>
     		<p class="normal">
            	First Lady: Caroline Lavinia Scott <br />
                Vice President: Levi P. Morton
            </p>
       </td>    
      	<td>
        	<img src="/photos/thumb_245px-William_McKinley-head%26shoulders.jpg" />
        	<!--<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779328138">-->
            <h1 class="header">William McKinley</h1></a><span class="normal">1843 - 1901</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779326352">Ida Saxton</a><br />
                Vice President: Garret A. Hobart<br />
                Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779329797">Theodore Roosevelt</a>
            </p>
       </td>                   
        </tr>
        <tr>
      	<td>
        	<img src="/photos/thumb_250px-Theodore_Roosevelt_circa_1902.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779329797">
            <h1 class="header">Theodore D. Roosevelt</h1></a><span class="normal">1858 - 1919</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779229447">Edith Kermit Carow</a><br />
                Vice President: Charles W. Fairbanks<br />
            </p>
       </td>    
      	<td>
        	<img src="/photos/thumb_250px-William_Howard_Taft_-_Harris_and_Ewing.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779329883">
            <h1 class="header">William Howard Taft</h1></a><span class="normal">1857 - 1930</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558569623">Helen Louise Herron</a><br />
                Vice President: James S. Sherman<br />
            </p>
       </td>    
      	<td>
        	<img src="/photos/thumb_245px-President_Woodrow_Wilson_portrait_December_2_1912.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779329935">
            <h1 class="header">Thomas Woodrow Wilson</h1></a><span class="normal">1856 - 1924</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558569704">Ellen Louise Axson</a><br />
                First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558569737">Edith Bolling Galt</a><br />
                Vice President: Thomas R. Marshall
            </p>
       </td>                         
        </tr>
        <tr>
      	<td>
        	<img src="/photos/thumb_255px-Warren_G_Harding-Harris_%26_Ewing.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779329950">
            <h1 class="header">Warren G Harding</h1></a><span class="normal">1865 - 1923</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558569798">Florence Mabel Kling</a><br />
                Vice President: Calvin Coolidge
            </p>
       </td>   
      	<td>
        	<img src="/photos/thumb_250px-Calvin_Coolidge-Garo.jpg" />
        	<!--<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779229715">-->
            <h1 class="header">John Calvin Coolidge</h1></a><span class="normal">1872 - 1933</span>
     		<p class="normal">
            	First Lady: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779229714">Grace Anna Goodhue</a><br />
                Vice President: Charles G. Dawes
            </p>
       </td> 
      	<td>
        	<img src="/photos/thumb_245px-Herbert_Clark_Hoover.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558563386">
            <h1 class="header">Herbert Clark Hoover</h1></a><span class="normal">1874 - 1964</span>
     		<p class="normal">
            	First Lady: Louise Henry<br />
                Vice President: Charles Curtis
            </p>
       </td>                         
        </tr>
        <tr>
      	<td>
        	<img src="/photos/thumb_260px-FDR_in_1933.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558563583">
            <h1 class="header">Franklin Delano Roosevelt</h1></a><span class="normal">1882 - 1945</span>
     		<p class="normal">
            	First Lady: Anna Eleanor Roosevelt<br />
                Vice President: John N. Garner<br />
                Vice President: Henry A. Wallace<br />
                Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558563588">Harry S. Truman</a>
            </p>
       </td>     
      	<td>
        	<img src="/photos/thumb_250px-Harry-truman.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558563588">
            <h1 class="header">Harry S Truman</h1></a><span class="normal">1882 - 1945</span>
     		<p class="normal">
            	First Lady: Elizabeth Virginia Wallace<br />
                Vice President: Alben W. Barkley
            </p>
       </td>  
      	<td>
        	<img src="/photos/thumb_250px-Dwight_D._Eisenhower%2C_official_photo_portrait%2C_May_29%2C_1959%20%281%29.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558563789">
            <h1 class="header">Dwight David Eisenhower</h1></a><span class="normal">1890 - 1969</span>
     		<p class="normal">
            	First Lady: Mamie Geneva Doud<br />
                Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779230089">Richard Nixon</a>
            </p>
       </td>                        
        </tr>
        <tr>
      	<td>
        	<img src="/photos/thumb_260px-JohnFKennedy.png" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558563935">
            <h1 class="header">John Fitzgerald Kennedy</h1></a><span class="normal">1917 - 1963</span>
     		<p class="normal">
            	First Lady: Jacqueline Lee Bouvier<br />
                Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I1755856405">Lyndon Baines Johnson</a>
            </p>
       </td> 
      	<td>
        	<img src="/photos/thumb_250px-37_Lyndon_Johnson_3x4.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558564051">
            <h1 class="header">Lyndon Baines Johnson</h1></a><span class="normal">1908 - 1973</span>
     		<p class="normal">
            	First Lady: Claudia Alta Taylor<br />
                Vice President: Hubert Humphrey 
            </p>
       </td>  
      	<td>
        	<img src="/photos/thumb_225px-Richard_Nixon.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779230089">
            <h1 class="header">Richard Milhous Nixon</h1></a><span class="normal">1913 - 1994</span>
     		<p class="normal">
            	First Lady: Thelma Catherine Ryan<br />
                Vice President: Spiro Agnew<br />
                Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558564295">Gerald Ford</a>
            </p>
       </td>                                 
        </tr>
        <tr>
      	<td>
        	<img src="/photos/thumb_250px-Gerald_Ford.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558564295">
            <h1 class="header">Gerald Ford</h1></a><span class="normal">1913 - 2006</span>
     		<p class="normal">
            	First Lady: Elizabeth Anne Bloomer<br />
                Vice President: Nelson Rockefeller
            </p>
       </td>   
      	<td>
        	<img src="/photos/thumb_250px-JimmyCarterPortrait2.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I8779327533">
            <h1 class="header">James Earl Carter</h1></a><span class="normal">1924 -</span>
     		<p class="normal">
            	First Lady: Eleanor Rosalynn Smith<br />
                Vice President: Walter Mondale
            </p>
       </td>
      	<td>
        	<img src="/photos/thumb_212px-Official_Portrait_of_President_Reagan_1981.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558564422">
            <h1 class="header">Ronald Wilson Reagan</h1></a><span class="normal">1911 - 2004</span>
     		<p class="normal">
            	First Lady: Anne Frances Robbins (Nancy Davis)<br />
                Vice President: <a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558564548">George H. W. Bush</a>
            </p>
       </td>                          
        </tr>
        <tr>
      	<td>
        	<img src="/photos/thumb_255px-George_H._W._Bush%2C_President_of_the_United_States%2C_1989_official_portrait.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558564548">
            <h1 class="header">George H. W. Bush</h1></a><span class="normal">1924 -</span>
     		<p class="normal">
            	First Lady: Barbara Pierce<br />
                Vice President: Dan Quayle
            </p>
       </td>   
      	<td>
        	<img src="/photos/thumb_250px-Bill_Clinton.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558564964">
            <h1 class="header">William Jefferson Clinton</h1></a><span class="normal">1946 -</span>
     		<p class="normal">
            	First Lady: Hillary Diane Rodham<br />
                Vice President: Albert Arnold Gore, Jr.
            </p>
       </td>   
      	<td>
        	<img src="/photos/thumb_250px-George-W-Bush.jpeg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558564962">
            <h1 class="header">George W. Bush</h1></a><span class="normal">1946 -</span>
     		<p class="normal">
            	First Lady: Laura Lane Welch<br />
                Vice President: Dick Cheney
            </p>
       </td>                       
        </tr>
        <tr>
      	<td>
        	<img src="/photos/thumb_225px-Official_portrait_of_Barack_Obama.jpg" />
        	<a href="/relationship.php?generations=50&secondpersonID=I3&tree=fitzvalley&primarypersonID=I17558560507">
            <h1 class="header">Barack Hussein Obama</h1></a><span class="normal">1961 -</span>
     		<p class="normal">
            	First Lady: Michelle LaVaughn Robinson<br />
                Vice President: Joseph Robinette Biden, Jr.
            </p>
       </td>             
        </tr>
    </table>

<?php tng_footer( "" ); ?>
