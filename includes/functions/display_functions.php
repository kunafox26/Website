<?php 
/*
/////////////////////////////////////////////////////////////////////
 Display functions: For functions that display directly to the user /
 Ex: get methods.                                                   /
/////////////////////////////////////////////////////////////////////

Comment code appropriately. Also, include your name for each function.

*/


function getTitle($pageNum)
	{
		 global $pages;
		 echo ($pageNum == 404 ? '404 page' : $pages[$pageNum]['title']);
	}

function getBody($pages, $pageNum)
	{ 
        include(($pageNum == 404 ? BADREQUEST : BODYPATH.$pages[$pageNum]['filename']));
	}
	

/*
 Function: getCSS
 Author: Aaron Clark
 Description: echos out a CSS include tag for the current page's stylesheet.
 Parameters: $pages (array containing page information), $pageNum (current page number)	
*/
 function getCSS($pages, $pageNum)
	{
		echo ("<link rel=\"stylesheet\" href=\"".BODYPATH.$pages[$pageNum]['stylesheet']."\">");
	}
	
function getNav()
	{
		
	global $pages;
	global $currentPage;
 	      foreach($pages as $page)
       {

 		 echo (($currentPage === $page['page']) ? "<a href =\"?page=".$page['page']." \">
		 <li><u>".$page['page']."</a></u></li>" :
 		          "<a href =\"?page=".$page['page']." \"> <li>".$page['page']."</a></li>");   
       }
       
       	}
    


 function getMeta()
 	{
 	  include(METAFILE);
 	}

 ?>