<?php

/**
 * resultList
 * @author auto create
 */
class Map
{
	
	/** 
	 * 活动ID，现有活动id包括： 2月手淘拉新：119013_2；3月手淘拉新：119013_3；
	 **/
	public $activity_id;
	
	/** 
	 * 首购用户数
	 **/
	public $alipay_user_cnt;
	
	/** 
	 * 结算CPA 奖励金额：仅支持member 维度的统计
	 **/
	public $alipay_user_cpa_pre_amt;
	
	/** 
	 * 当日激活且首购结算的CPA 金额：仅适用于八天乐，仅支持member维度的统计
	 **/
	public $bind_buy_user_cpa_pre_amt;
	
	/** 
	 * 当日激活且首购的有效用户数：仅适用于八天乐，支持member，adzone维度的统计
	 **/
	public $bind_buy_valid_user_cnt;
	
	/** 
	 * 日期
	 **/
	public $biz_date;
	
	/** 
	 * 新激活用户数
	 **/
	public $login_user_cnt;
	
	/** 
	 * 确认收货用户数
	 **/
	public $rcv_user_cnt;
	
	/** 
	 * 结算有效用户数
	 **/
	public $rcv_valid_user_cnt;
	
	/** 
	 * 新注册用户数
	 **/
	public $reg_user_cnt;	
}
?>