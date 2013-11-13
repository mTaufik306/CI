<?php
class Mycal_model extends CI_Model {
	
	var $conf;
	function __construct(){
		parent::__construct();

		$this->conf = array(
			'start_day' => 'monday',
			'show_next_prev' =>true,
			'day_type'	=> 'long',
			'next_prev_url' => base_url().'mycal/display'
		);

		
		//see calendaring class in CI guide
		$this->conf['template'] = '
			{table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar">{/table_open}

			{heading_row_start}<tr>{/heading_row_start}

			{heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
			{heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
			{heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

			{heading_row_end}</tr>{/heading_row_end}

			{week_row_start}<tr>{/week_row_start}
			{week_day_cell}<td>{week_day}</td>{/week_day_cell}
			{week_row_end}</tr>{/week_row_end}

			{cal_row_start}<tr class="days">{/cal_row_start}
			{cal_cell_start}<td class="day">{/cal_cell_start}

			{cal_cell_content}
				<div class="day_num ">{day}</div>
				<div class="content">{content}</div>
			{/cal_cell_content}
			{cal_cell_content_today}
				<div class="day_num highlight">{day}</div>
				<div class="content">{content}</div>
			</div>{/cal_cell_content_today}

			{cal_cell_no_content}<div class="day_num ">{day}</div>{/cal_cell_no_content}
			{cal_cell_no_content_today}<div class="day_num highlight">{day}</div>
			{/cal_cell_no_content_today}

			{cal_cell_blank}&nbsp;{/cal_cell_blank}

			{cal_cell_end}</td>{/cal_cell_end}
			{cal_row_end}</tr>{/cal_row_end}

			{table_close}</table>{/table_close}
		';
	}

	function get_calendar_data($year, $month) {
		
		//calendar table has 2 columns, date(date) and memo(text)
		$query = $this->db->select('date, memo')->from('calendar')
			->like('date', "$year-$month", 'after')->get();//"2013-11%"
			
		$cal_data = array();
		
		foreach ($query->result() as $row) {
			$num = (int)substr($row->date,8,2);//substr(string,start,length)
			//2013-11-{13}, 13 is the part of the date which is wanted to retrieved
			//01 need to be converted into 1 to be passed into cal_data, just to make the memo showed
			//because index of 01 won't show the memo, should be 1 => 'memo' rather than 01 => 'memo'  

			$cal_data[$num] = $row->memo;
			//param of month is already passed so what left is the specific data that need to be
			//tracked, so the date is made to be the array index
			//to sum it up, $cal_data will have range [1]..[31], depend on the row->data
		}
		
		return $cal_data;
		
	}

	function add_calendar_data($date, $data) {
		
		//if the given date has already contained a memo, update the old memo by the new 
		//instead of inserting the new memo
		if ($this->db->select('date')->from('calendar')
				->where('date', $date)->count_all_results()) {
			
			$this->db->where('date', $date)
				->update('calendar', array(
				'date' => $date,
				'memo' => $data			
			));
			
		} else {
		
			$this->db->insert('calendar', array(
				'date' => $date,
				'memo' => $data			
			));
		}
		
	}

	function generate($year, $month){
		
		$this->load->library('calendar',$this->conf);
		$this->add_calendar_data('2013-11-13', 'get immersed in git and CI');
		//adding data to specific date within the calendar
		$cal_data = $this->get_calendar_data($year,$month);
		return $this->calendar->generate($year, $month, $cal_data);
	}
}
