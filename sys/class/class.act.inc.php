<?php

//��࣬��ִ�еĲ�������������һ���»������id��ѯһ���
//����(һ��/һ��)�ؼ��ʲ�ѯһϵ�л����
//�޸�ĳ���
//ɾ��ĳ���

class Act extends DB_Connect {
	
	public function __construct(  ){
		parent::__construct();
	}
	public function fetch_from_date($date)
	{
		$arr;
		
		return $arr; 
	}
	public function fetch_hot()
	{
		
	}
	public function fetch_highscore()
	{
		return 2;
	}
	public function fetch_all($keywords,$start_from,$num)
	{

			echo "sdfsdfsdfsd";
			$query="select * from activity_info";
			$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			if (mysql_num_rows($select)>0)
				echo "asdasdasd";
			else echo "asdasd";
				
			return $select;
		

	}
	public function fetch_all($keywords,$start_from)
	{
		
	}
	
	public function create_new( $name,$place,$time_type,$attribution_type,$begin_time,$end_time,$detail_time,$total_num,$need_audit,$responser,$responser_tel,$last_time,$activity_profile,$state,$publisher){
		$accepted_num		=0;
		$offer_num			=0;
		$begin_time=$begin_time." 00:00:0";
		$end_time=$end_time." 00:00:0";
		$query="select name from activity_info where name='".$name."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		if(mysql_num_rows($select) == 0) {
			$insert = "
			insert into activity_info 
			( 	
				name,place,time_type,attribution_type,
				detail_time,total_num,need_audit,
				responser,responser_tel,last_time,
				begin_time,end_time,state,profile,publisher
			) 
			values
			(
				'".$name."','".$place."','".$time_type."','".$attribution_type."',
				'".$detail_time."','".$total_num."','".$need_audit."',
				'".$responser."','".$responser_tel."','".$last_time."',
				'".$begin_time."','".$end_time."','".$state."','".$activity_profile."',
				18
					
			);";
			if (!mysql_query($insert,$this->root_conn))
			{
			  die('Error: ' . mysql_error());
			}
			return 1;
		}else
		{
			return 0;
		}

	}

	public function fetch_one( $id ){
		
	}
	


	public function modify( $id/* ��������δ���� */ ){
		
	}

	public function delete( $id ){
	
	}
	
}

?>