<?
function getsetup_viz_ImagePieChart()
{

$options['_CREDITS']				= 'This module has been developed by the <a href="http://dt.asu.edu">Decision Theater</a> based on the Google Chart API.<br>';
	$options['_MODULEDESCRIPTION']		= '
	Columns:
		<ul>
		<li>Column 0: string</li>
		<li>Column 1: number</li>
		<li>Column ..</li>
		<li>Column N: number</li>
		</ul>
		
		<p>For more detailed information, please, refer to <a href="https://developers.google.com/chart/interactive/docs/gallery/imagepiechart">Google Charts ImagePieChart</a> </p>
	';

	$options[10]['name']				= 'x';
	$options[10]['description']			= 'Placement x coordinate';
	$options[10]['detail']				= 'Default: 500';
	$options[10]['type']				= 'Integer';
	$options[10]['link']				= 'link to further information..?';
	$options[10]['lookup']				= ''; 
	$options[10]['default']				= '500';
	$options[10]['optional']			= 'no';
	$options[10]['repeatable']			= 'no';
	$options[10]['perdashboard']		= 'yes';
	$options[10]['dependenton']			= '';

	$options[20]['name']				= 'y';
	$options[20]['description']			= 'Placement y coordinate';
	$options[20]['detail']				= 'Default: 500';
	$options[20]['type']				= 'Integer';
	$options[20]['link']				= 'link to further information..?';
	$options[20]['lookup']				= ''; 
	$options[20]['default']				= '500';
	$options[20]['optional']			= 'no';
	$options[20]['repeatable']			= 'no';
	$options[20]['perdashboard']		= 'yes';
	$options[20]['dependenton']			= '';	
	
	$options[30]['name']				= 'width';
	$options[30]['description']			= 'Width of the chart';
	$options[30]['detail']				= 'Default: 600';
	$options[30]['type']				= 'Integer';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; 
	$options[30]['default']				= '600';
	$options[30]['optional']			= 'no';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'yes';
	$options[30]['dependenton']			= '';		

	$options[40]['name']				= 'height';
	$options[40]['description']			= 'Height of the chart';
	$options[40]['detail']				= 'Default: 500';
	$options[40]['type']				= 'Integer';
	$options[40]['link']				= 'link to further information..?';
	$options[40]['lookup']				= ''; 
	$options[40]['default']				= '500';
	$options[40]['optional']			= 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']		= 'yes';
	$options[40]['dependenton']			= '';	
	
	$options[80]['name']				= 'tablename';
	$options[80]['description']			= 'From this table';
	$options[80]['detail']				= 'choose the table you want to graph. refer to the module description for table format';
	$options[80]['type']				= 'Text';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= ''; 
	$options[80]['default']				= '';
	$options[80]['optional']			= 'no';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']		= 'no';
	$options[80]['dependenton']			= '';
	
	$options[120]['name']				= 'legend';
	$options[120]['description']		= 'Please select position of the legend';
	$options[120]['detail']				= 'Default: none';
	$options[120]['type']				= 'Dropdown';
	$options[120]['link']				= 'link to further information..?';
	$options[120]['lookup']				= '|top|bottom|left|right|none'; 
	$options[120]['default']			= 'none';
	$options[120]['optional']			= 'no';
	$options[120]['repeatable']			= 'no';
	$options[120]['perdashboard']		= 'yes';
	$options[120]['dependenton']		= '';	
	
	$options[130]['name']				= 'title';
	$options[130]['description']		= 'Please select text to be displayed above the chart';
	$options[130]['detail']				= 'the title of the chart';
	$options[130]['type']				= 'Text';
	$options[130]['link']				= 'link to further information..?';
	$options[130]['lookup']				= '';
	$options[130]['default']			= '';
	$options[130]['optional']			= 'no';
	$options[130]['repeatable']			= 'no';
	$options[130]['perdashboard']		= 'no';
	$options[130]['dependenton']		= '';	
	
	$options[140]['name']				= 'labels';
	$options[140]['description']		= 'whether there will be labels on the piechart';
	$options[140]['detail']				= 'The options are to have slice values, column names or no labels. Default: none.';
	$options[140]['type']				= 'Dropdown';
	$options[140]['link']				= 'link to further information..?';
	$options[140]['lookup']				= '|none|value|name';
	$options[140]['default']			= 'none';
	$options[140]['optional']			= 'no';
	$options[140]['repeatable']			= 'no';
	$options[140]['perdashboard']		= 'yes';
	$options[140]['dependenton']		= '';	
	
	$options[150]['name']				= 'is3D';
	$options[150]['description']		= 'whether chart is displayed in 3D';
	$options[150]['detail']				= 'true will make the chart 3D. Default: false';
	$options[150]['type']				= 'Dropdown';
	$options[150]['link']				= 'link to further information..?';
	$options[150]['lookup']				= '|true|false';
	$options[150]['default']			= 'false';
	$options[150]['optional']			= 'no';
	$options[150]['repeatable']			= 'no';
	$options[150]['perdashboard']		= 'yes';
	$options[150]['dependenton']		= '';	
	
	
	return($options);
	
}


function place_viz_ImagePieChart($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	
	echo '<div id="cover'.$sid.'">';
	echo '<div id="velement'.$sid.'" style="position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:'.($dashboard_options['width']).'; height:'.($dashboard_options['height']).';">';
	echo '</div>';
	
	$content = '';
	
	if(isset($options['tablename']))
	{
		$content .= '
		<script type="text/javascript">
			var image_piechart'.$sid.';
			var data'.$sid.';
			google.load(\'visualization\', \'1\', {\'packages\':[\'imagepiechart\']});
			google.setOnLoadCallback(drawChart'.$sid.');';

		$content .= '
			function drawChart'.$sid.'()
			{';
		$content .= reload_viz_ImagePieChart($sid, $value, $options, $setup);
		
		$content .=
		  'pie_chart'.$sid.' = new google.visualization.ImagePieChart(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.', 
                 { 
                legend:\''.($dashboard_options['legend']).'\', 
				labels:\''.($dashboard_options['labels']).'\', 
                width:'.($dashboard_options['width']).', 
                height:'.($dashboard_options['height']).',
                is3D:'.($dashboard_options['is3D']).',
                title:\''.$options['title'].'\'});';

		$content .=	'}
		</script>';

}

echo $content;
	echo '</div>';
	
	echo '	<script language="JavaScript" type="text/javascript">
				function reload'.$sid.'(dashboard, response)
				{
					place_viz(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function mark'.$sid.'(dashboard, response)
				{
					document.getElementById("velement'.$sid.'").style.border=\'2px solid red\';
				}
				function reload_update'.$sid.'(response)
				{
					eval(response);
					image_piechart'.$sid.' = new google.visualization.ImagePieChart(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.', 
				{
                legend:\''.($dashboard_options['legend']).'\', 
				labels:\''.($dashboard_options['labels']).'\', 
                width:'.($dashboard_options['width']).', 
                height:'.($dashboard_options['height']).',
                is3D:'.($dashboard_options['is3D']).',
                title:\''.$options['title'].'\'
                });
			}
			</script>';
}



function reload_viz_ImagePieChart($sid, $value, $options, $setup)
{
	global $db;
	
	$dashboard_options = $options['dashboard_options'];
	if(false)
	{
		$name_type = explode(',',$options[4]);
		for($i=0; $i<count($name_type); $i++)
		{
			$name_type1[$i] = explode(':',$name_type[$i]);
		}
	}
	else
	{
		$result3 = $db->fetchAll("select column_name from information_schema.columns where table_name ='"  .$options['tablename']."'");
		for($i=0; $i<count($result3); $i++) //ERZHENA LAST CHANGE
		
		{
			$name_type1[$i][0] = $result3[$i]['column_name'];
			$name_type1[$i][1] = $result3[$i]['column_name'];
			if($i==0) $name_type1[$i][2] = 'string';
			else  $name_type1[$i][2] = 'number';
		}
	}
	
	
	
	$sql = "select ";
	for($i=0; $i<count($name_type1);$i++)
		if($i==0) $sql .= ' "'.$name_type1[$i][0].'"';
		else $sql .= ' ,"'.$name_type1[$i][0].'"';
	$sql .= ' from "'.$options['tablename'].'"';
	$result	= $db->fetchAll($sql);
	
	$content = '
	data'.$sid.' = new google.visualization.DataTable(     {
	cols: [';
	for($i=0; $i<count($name_type1);$i++)
	{
		if($i>0) $content .= ',';
		$content .=	'{id: \''.$name_type1[$i][0].'\', label: \''.$name_type1[$i][1].'\', pattern:\'\' , type: \''.$name_type1[$i][2].'\'}';
	}
    $content .= '],	rows: [';
	$i=0;
	
	foreach($result as $value)
	{
		if($i>0) $content .= ",";
		$content .= "{c:[";
		for($j=0;$j<count($value);$j++)
		{
			if($j>0) $content.=',';
			if($name_type1[$j][2]=="number") $content .=  "{v: ".$value[$name_type1[$j][0]].", f:null}";
			else $content .=  "{v: '".$value[$name_type1[$j][0]]."', f:null}";
		}
		$content .= "]}";
		$i++;
	} 
	$content .= '],p:null});';
	return($content);
}