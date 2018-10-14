<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/2018
 * Time: 14:25
 */

namespace App\Repositories;


abstract class EloquentRepository
{
	protected $_model;

	public function __construct()
	{
		$this->setModel();
	}

	abstract public function getModel();

	public function setModel()
	{
		$this->_model = app()->make(
			$this->getModel()
		);
		//new object
	}

	public function getAll()
	{
		return $this->_model->all();
	}

	public function find($id)
	{
		$result = $this->_model->find($id);

		return $result;
	}

}