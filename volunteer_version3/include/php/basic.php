<?php

/*�ļ�·��
./include/php/basic.php
*/

//mark $_SERVER['DOCUMENT_ROOT']

/***********************************************
	���¶�Ӧ���ݿ��е��ֶΣ�����session��������Щ�������ܲ����õ���
	�������ȶ����ţ���$_user_password
***********************************************/
$_user_id = "user_id";
$_user_password = "user_password";
$_user_permission = "user_permission";
$_user_last_login = "user_last_login";
$_user_login_num = "user_login_num";
$_user_gender = "user_gender";
$_user_name = "user_name";
$_user_faculty = "user_faculty";
$_user_faculty_id = "user_faculty_id";
$_user_department = "user_department";
$_user_email = "user_email";
$_user_phone = "user_phone";
$_user_volunnteer_time = "user_volunnteer_time";
$_user_qq = "user_qq";
$_user_city = "user_city";
$_user_grade = "user_grade";

$_act_id = "activity_id";
$_act_name = "activity_name";
$_act_responser_tel = "act_responser_tel";
$_act_begin_time = "act_begin_time";
$_act_end_time = "act_end_time";
$_act_last_time = "act_last_time";
$_act_profile = "act_profile";
$_act_total_num = "act_total_num";
$_act_accepted_num = "act_accepted_num";
$_act_offer_num = "act_offer_num";
$_act_state = "act_state";
$_act_requirements = "act_requirements";
$_act_summary = "act_summary";
$_act_time_type = "act_time_type";
$_act_attribution_type = "act_attribution_type";
$_act_need_audit = "act_need_audit";
$_act_deadline = "act_deadline";
$_act_place = "act_place";
$_act_publisher = "act_publisher";

/*
����¼֮��ᱣ������session���������޸�����session��������ʹ�����϶���ı�����
$_SESSION[ $_user_id ]
$_SESSION[ $_user_name ]
$_SESSION[ $_user_permission ]
*/

//up = user permmission, r = root, t = team, v = volunteer
$_up_r = 'Administrator'; 
$_up_t = 'Organizer';
$_up_v = 'Visitor';

/***********************************************
���������ݿ�ö�ٱ���enumeration��Ӧ������
as = activity state
***********************************************/
$_as_editing = 'editing';
$_as_auditing = 'auditing';
$_as_recruting = 'recruting';//��Ӧԭ���ݿ���audited
$_as_returned = 'returned';
$_as_holding = 'holding';//�ٰ���
$_as_closed = 'closed';
$_e_as[ $_as_editing ] = "�༭��";
$_e_as[ $_as_auditing ] = "�����";
$_e_as[ $_as_recruting ] = "��ļ��";
$_e_as[ $_as_returned ] = "���˻�";//˵���˻���δͨ�����һ������δ�Ըû���±༭
$_e_as[ $_as_closed ] = "�ѽ���";

//att = activity time type
$_att_last = 'longtime';
$_att_temp = 'temp';
$_e_att[ $_att_last ] = "����";
$_e_att[ $_att_temp ] = "����";
//e.g.  echo $_e_att[ $AAA[  ]  ];

//aat = activity attibution type
$_aat_hd = 'helpdisabled';
$_aat_se = 'supporteducation';
$_e_aat[ $_aat_hd ] = "����";
$_e_aat[ $_aat_se ] = "֧��";

$_e_boolean['true'] = "��";
$_e_boolean['false'] = "��";

/*
��mark��
���ݿ�Ӧ�û���һ��Ժϵ��һ��ʡ�б�һ���꼶ѡ���
һ��"���¼��"��
��¼id�� �id�������ʱ�䣬�����ص�

�޸�ԭ"���¼��"Ϊ"־Ը�߷����¼��"��
־Ը��id����¼id������ʱ������ע

���ͨ���Ƿ������������

��suggestions��
1.����������"־Ը�߱���ʱ��"�ֶΣ�
*/


/*
ע�⣺
1.	����ͷ�����߼�ͳһ��װ��header.php������ҳ��ֻ��require('include/php/header.php');�����ˣ�������
	ʹ��header_v.php����header_t.php����header_r.php��header.php����
	session���û�Ȩ���жϣ������Ƿ���Ҫ��3��header���д����ۡ�

2.	�����������
	2.1	��ɻע��/�༭/�޸�ҳ��activity/edit.php���ķ������������桢Ԥ�����ύ���ܣ�
	2.2	��ɻ��ϸ/Ԥ��ҳ��activity/detail.php����>_<��������ҳ����(activity/detail_left.php���ĳ���)
			�ĻͼƬ��������ť�����롢�༭����˵ȣ����Ҳ��ı��������activity/handle/act_people.php��Ф������
			�Լ�������־Ը�߷����¼activity/handle/exp_people.php������������
	2.3	��ɻ�б���ѯҳ��activity.php��������������activity_search.php����������activity_list.php��master����
	2.4	�������ҳ����Ű�include/css/activity.css�������ȡ���
	ps	1	������ṩ"�����"��ѡ��(������)������Ҫ����ϴ���ͼ��
			2	�ֹ��������Լ�΢����

3.	���й��ڻ��js�������(ע�⣺�����Ҳ���ǵ����׶�)�����ɵ��ļ�include/js/activity.js��
	���й��ڻ��css������󽫼��ɵ��ļ�include/css/activity.css��������߹�âcss�����������úÿ���
	����html�е�id��class����ע�ⲻҪ��ͻ���������Ի���

4.	 ����ҳ���д���д���ݲ��ϴ���

*/
?>