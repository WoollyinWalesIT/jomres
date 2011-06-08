<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

// Original concept:
 /*
 ################################
 ####							####
 ####	Author : Harish Chauhan			####
 ####	Date : 27 Sep,2004			####
 ####	Updated:					####
 ####							####
 ################################
 */
// Adapted by Vince Wool for Joomla/Jomres.

/**
#
 * Creates the Jomres paging object
 #
* @package Jomres
* @since 2.6
#
*/
class JomresPage
	{
	var $total_records=1; ///Total Records returned by sql query
	var $records_per_page=1;	///how many records would be displayed at a time
	var $page_name=""; ///page name on which the class is called
	var $start=0;
	var $page=0;
	var $total_page=0;
	var $current_page;
	var $remain_page;
	var $show_prev_next=true;
	var $show_scroll_prev_next=false;
	var $show_first_last=false;
	var $show_disabled_links=true;
	var $scroll_page=0;
	var $qry_str="";
	var $link_para="";

	/* returns boolean value if it is last page or not*/
	function is_last_page()
		{
		return $this->page>=$this->total_page-1?true:false;
		}

	/* param : Void
	returns boolean value if it is first page or not*/
	function is_first_page()
		{
		return $this->page==0?true:false;
		}

	function current_page()
		{
		return $this->page+1;
		}

	function total_page()
		{
		return $this->total_page==0?1:$this->total_page;
		}

	//@param : $show = if you want to show desabled links on navigation links.
	//
	function show_disabled_links($show=TRUE)
		{
		$this->show_disabled_links=$show;
		}

	//@param : $link_para = if you want to pass any parameter to link
	//
	function set_link_parameter($link_para)
		{
		$this->link_para=$link_para;
		}

	function set_page_name($page_name)
		{
		$this->page_name=$page_name;
		}

	//@param : str= query string you want to pass to links.
	function set_qry_string($str="")
		{
		$this->qry_str.="&".$str;
		}

	function set_scroll_page($scroll_num=0)
		{
		if($scroll_num!=0)
			$this->scroll_page=$scroll_num;
		else
			$this->scroll_page=$this->total_records;
		}

	function set_total_records($total_records)
		{
		if($total_records<0)
		$total_records=0;
		$this->total_records=$total_records;
		}
	function set_records_per_page($records_per_page)
		{
		if($records_per_page<=0)
			$records_per_page=$this->total_records;
		$this->records_per_page=$records_per_page;
		}

	/* @params
	* 	$page_name = Page name on which class is integrated. i.e. $_SERVER['PHP_SELF']
	*	$total_records=Total records returnd by sql query.
	* 	$records_per_page=How many projects would be displayed at a time
	*		$scroll_num= How many pages scrolled if we click on scroll page link.
	* 				i.e if we want to scroll 6 pages at a time then pass argument 6.
	* 	$show_prev_next= boolean(true/false) to show prev Next Link
	* 	$show_scroll_prev_next= boolean(true/false) to show scrolled prev Next Link
	* 	$show_first_last= boolean(true/false) to show first last Link to move first and last page.
	*/

	function set_page_data($page_name,$total_records,$records_per_page=1,$scroll_num=0,$show_prev_next=true,$show_scroll_prev_next=false,$show_first_last=false,$limit)
		{
		$this->set_total_records($total_records);
		$this->set_records_per_page($records_per_page);

		$this->set_scroll_page($scroll_num);
		$this->set_page_name($page_name);
		$this->show_prev_next=$show_prev_next;
		$this->show_scroll_prev_next=$show_scroll_prev_next;
		$this->show_first_last=$show_first_last;
		$this->limit=$limit;
		}

	function get_first_page_nav($user_link="",$link_para="")
		{
		$txt="";
		if($this->total_page<=1)
			return;
		if(trim($user_link)=="")
			$user_link="["._PN_START."]&nbsp;";
		if(!$this->is_first_page()&& $this->show_first_last)
			$txt.=' <a href="'.jomresURL($this->page_name.'&plistpage=0'.$this->qry_str).'">'.$user_link.'</a> ';
		elseif($this->show_first_last && $this->show_disabled_links)
			$txt.=$user_link;
		return $txt;
		}

	function get_last_page_nav($user_link="",$link_para="")
		{
		$txt="";
		if($this->total_page<=1)
			return;
		if(trim($user_link)=="")
			$user_link="["._PN_END."]" ;
		if(!$this->is_last_page()&& $this->show_first_last)
			$txt.=' <a href="'.jomresURL($this->page_name.'&plistpage='.($this->total_page-1).$this->qry_str).'">'.$user_link.'</a> ';
		elseif($this->show_first_last && $this->show_disabled_links)
			$txt.='&nbsp;'.$user_link;
		return $txt;
		}

	function get_next_page_nav($user_link="",$link_para="")
		{
		$txt="";
		if($this->total_page<=1)
			return;
		if(trim($user_link)=="")
			$user_link=jr_gettext('_PN_NEXT',_PN_NEXT,false,false)." &gt;&gt;&nbsp;";
		if(!$this->is_last_page()&& $this->show_prev_next)
			$txt.=' <a href="'.jomresURL($this->page_name.'&plistpage='.($this->page+1).$this->qry_str).'">'.$user_link.'</a> ';
		elseif($this->show_prev_next && $this->show_disabled_links)
			$txt.=$user_link;
		return $txt;
		}

	function get_prev_page_nav($user_link="",$link_para="")
		{
		$txt="";
		if($this->total_page<=1)
			return;
		if(trim($user_link)=="")
			$user_link="&lt;&lt; ".jr_gettext('_PN_PREVIOUS',_PN_PREVIOUS,false,false)."&nbsp;";
		if(!$this->is_first_page()&& $this->show_prev_next)
			$txt.=' <a href="'.jomresURL($this->page_name.'&plistpage='.($this->page-1).$this->qry_str).'">'.$user_link.'</a> ';
		elseif($this->show_prev_next && $this->show_disabled_links)
			$txt.=$user_link;
		return $txt;
		}

	function get_scroll_prev_page_nav($user_link="",$link_para="")
		{
		$txt="";
		if($this->scroll_page>=$this->total_page)
			return;
		if(trim($user_link)=="")
			$user_link=jr_gettext('_PN_PREVIOUS',_PN_PREVIOUS,false,false)."[$this->scroll_page]&nbsp;";
		if($this->page>$this->scroll_page &&$this->show_scroll_prev_next)
			$txt.=' <a href="'.jomresURL($this->page_name.'&plistpage='.($this->page-$this->scroll_page).$this->qry_str).'">'.$user_link.'</a> ';
		elseif($this->show_scroll_prev_next && $this->show_disabled_links)
			$txt.=$user_link;
		return $txt;
		}

	function get_scroll_next_page_nav($user_link="",$link_para="")
		{
		$txt="";
		if($this->scroll_page>=$this->total_page)
			return;
		if(trim($user_link)=="")
			$user_link=jr_gettext('_PN_NEXT',_PN_NEXT,false,false)."[$this->scroll_page]&nbsp;";
		if($this->total_page>$this->page+$this->scroll_page &&$this->show_scroll_prev_next)
			$txt.=' <a href="'.jomresURL($this->page_name.'&plistpage='.($this->page+$this->scroll_page).$this->qry_str).'">'.$user_link.'</a> ';
		elseif($this->show_scroll_prev_next && $this->show_disabled_links)
			$txt.='&nbsp;'.$user_link;
		return $txt;
		}

	function get_number_page_nav($link_para="")
		{
		$txt="";
		$j=0;
		$scroll_page=$this->scroll_page;
		if($this->page>($scroll_page/2))
		$j=$this->page-intval($scroll_page/2);
		if($j+$scroll_page>$this->total_page)
		$j=$this->total_page-$scroll_page;

		if($j<0)
			$i=0;
		else
			$i=$j;

		for(;$i<$j+$scroll_page && $i<$this->total_records;$i++)
			{
			if($i==$this->page)
				$txt.='&nbsp;'.($i+1).'&nbsp;';
			else
				$txt.=' <a href="'.jomresURL($this->page_name.'&plistpage='.$i.$this->qry_str).'">'.($i+1).'</a>&nbsp;';
			}
		return $txt;
		}

	function get_page_nav()
		{
		$txt="";
		if($this->total_page>1)
			{
			$this->calculate();
			$txt='';
			$txt.=$this->get_first_page_nav("",$this->link_para);
			$txt.=$this->get_scroll_prev_page_nav("",$this->link_para);
			$txt.=$this->get_prev_page_nav("",$this->link_para);
			$txt.=$this->get_number_page_nav($this->link_para);
			$txt.=$this->get_next_page_nav("",$this->link_para);
			$txt.=$this->get_scroll_next_page_nav("",$this->link_para);
			$txt.=$this->get_last_page_nav("",$this->link_para);
			$txt.='';
			}

		return $txt;
		}


	function writePagesCounterJR()
		{
		$txt="";
		if ($this->total_page>1){
		$this->calculate();
		$txt='';
		$txt.='';
		$txt.=""._PN_RESULTS." ".($this->page+1) ." "._PN_OF." ".$this->total_page."";
		$txt.='';}
		return $txt;
		}

	function calculate()
		{
		$this->page = intval(jomresGetParam( $_REQUEST, 'plistpage', 0));
		$this->start=$this->page*$this->records_per_page;
		$this->total_page=@intval($this->total_records/$this->records_per_page);
		if($this->total_records%$this->records_per_page!=0)
		$this->total_page++;
		}

	function get_limit_query($qry="",$start)
		{
		$this->calculate();
		return $qry." LIMIT ".(int)$this->start.",".(int)$this->records_per_page."";
		}

	function getLimitBox ( ) {
		$link=$this->page_name;
		$limits = array();
		for ($i=5; $i <= 30; $i+=5) {
			$limits[] = jomresHTML::makeOption( "$i" );
		}
		$limits[] = jomresHTML::makeOption( "50" );

		// build the html select list
		$link = $link ."&amp;limit=' + this.options[selectedIndex].value + '&amp;page=". $this->page;
		$link = jomresURL( $link );
		return jomresHTML::selectList( $limits, 'limit', 'class="inputbox" size="1" onchange="document.location.href=\''. $link .'\';"', 'value', 'text', $this->limit );
	}
	}