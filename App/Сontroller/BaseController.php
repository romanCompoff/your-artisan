<?php
namespace vatal\artisan\Controller;

class BaseController
{
	protected $title;
	protected $content;
	protected $pageDataMassive;
	protected $nPage;
	protected $pPage;
	protected $breadCrumbs;
	
	
	public function __construct()
	{
		$this->title = 'Любые мастера в вашем городе';
		$this->content = '';
		$this->pageDataMassive = [];
	}
	
	public function render()
	{
		echo $this->build(
		__DIR__ . '/../views/index1.html.php',
		[
		'title' => $this->title,
		'content' => $this->content,
		'data' => $this->pageDataMassive,
		'breadCrumbs' => $this->breadCrumbs
		]
		);
	}
	
	protected function build($template, array $params = [])
	{
			ob_start();
			extract($params);
			include_once($template);
			return ob_get_clean();
			

	}
		public function err404()
	{
				header( "HTTP/1.1 404 Not Found" );
				header("location: /App/views/err/404.php");
				exit();
	}
		public function indexAction($city = "azov", $job = "pc-help.html")
	{	
		
		$MyPath = sprintf('pages/%s/%s', $city, $job);
			if(!file_exists($MyPath)){
				$this->err404();
			}else{
			
			$jobs = $this->reedDirJob($city);
			$myArr = array_search($job, $jobs);
				if(isset($jobs[$myArr + 1])){
					$n = sprintf('<p><a href = "/%s/%s">Следующая страница</a></p>', $city, $jobs[$myArr + 1]);
					$this->nPage = $n;
				}
				if(isset($jobs[$myArr - 1])){
					$p = sprintf('<p><a href = "/%s/%s">Предыдущая страница</a></p>', $city, $jobs[$myArr - 1]);
					$this->pPage = $p;
				}
		
		$data = file_get_contents($MyPath);
		$bookshelf = json_decode($data, TRUE); // Если нет TRUE то получает объект, а не массив.
		$this->pageDataMassive = $bookshelf;
		$breadCrumbs = sprintf('<a href = "/">HOME</a> > <a href = "/%s">%s</a> > %s' , $this->pageDataMassive[0], $this->pageDataMassive[3], $this->pageDataMassive[1]);
		$this->breadCrumbs = $breadCrumbs;
		$this->content = $this->build(__DIR__ . sprintf('/../views/%s.php', $job), ['content' => $bookshelf,
		'pPage' => $this->pPage,
		'nPage' => $this->nPage
		]);
		}
		

	}
		public function oneCityAction($city = "azov")
	{
		$jobs = $this->reedDirJob($city);
		$data = file_get_contents(sprintf('pages/%s/%s', $city, $jobs[0]));
		$data= json_decode($data);
		
		$neiborhood = $this->reedDirJob();
		$this->pageDataMassive[0] = $city;
		$this->pageDataMassive[5] = sprintf("IT услуги в %s с выездом на дом. Категории услуг.", $data[4]);
		$this->pageDataMassive[6] = sprintf("Выездные компьютерные услуги в %s. Разработка сайтов и программ.", $data[4]);

		$breadCrumbs = sprintf('<a href = "/">HOME</a> > %s', $city);
		$this->breadCrumbs = $breadCrumbs;
		$myArr = array_search($city, $neiborhood);
			
			if(isset($neiborhood[$myArr + 1])){
				$n = sprintf('<div class = "col-sm-4"><p><a href = "/%s"> Следующая страница &raquo;</a></p></div>', $neiborhood[$myArr + 1]);
				$this->nPage = $n;
			}
			if(isset($neiborhood[$myArr - 1])){
				$p = sprintf('<div class = "col-sm-4"><p><a href = "/%s">&laquo; Предыдущая страница </a></p></div>', $neiborhood[$myArr - 1]);
				$this->pPage = $p;
			}
		
		$this->content = $this->build(__DIR__ . '/../views/oneCity.html.php' , ['content' => $jobs,
		'data' => $this->pageDataMassive,
		'city' => $city,
		'pPage' => $this->pPage,
		'nPage' => $this->nPage
		]);
	}
	
		public function homeAction()
	{
		$breadCrumbs = 'HOME';
		$this->breadCrumbs = $breadCrumbs;
		$this->pageDataMassive[0] = 'azov';
		$this->content = $this->build(__DIR__ . '/../views/home.html.php' , []);
	}
		private function reedDirJob($city = '')
	{
			if(!is_dir('pages/' . $city)){
				$this->err404();
			}
			$jobs = scandir('pages/' . $city);
			unset($jobs[0]);
			unset($jobs[1]);
			$jobs = array_values($jobs);
			return $jobs;
	}
	
	
	
	
}