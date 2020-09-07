<?php


class Loan_model extends CI_Model
{
	const TABLE_NAME = 'loans';

	public function all()
	{
		return $this->db->get(self::TABLE_NAME);
	}

	public function getUserLoan($id)
	{
		return $this->db->get_where(self::TABLE_NAME, ['user_id' => $id]);
	}
}
