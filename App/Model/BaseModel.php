<?php
namespace vatal\artisan\Model;

class BaseModel
{
	private $db;
	
	public function __construct($db)
	{
		$this->db = $db;
	}
	
	public function indexModel()
	{
		//
	}
		public function getOne($city, $job)
	{
		$this->db->setAttribute($this->db::ATTR_DEFAULT_FETCH_MODE,$this->db::FETCH_NUM);
		$sql = sprintf('SELECT * FROM %s WHERE city = :city and job = :job', 'artisanjobs');
		$stmt = $this->db->prepare($sql);
		$stmt->execute([
			'city' => $city,
			'job' => $job
		]);
		
		return $stmt->fetch();
	}
}
		// $mPost = new baseModel(DB::getConnect());
		// $data = $mPost->getOne($city, $job);
		// unset($data[0]);
		// $data = array_values($data);
		// $this->pageDataMassive = $data;
		// $this->content = $this->build(__DIR__ . sprintf('/../views/%s.php', $job), ['content' => $data]);