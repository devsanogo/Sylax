<?php 
/**
 * Header - General Platform Template
 *
 * @author      Anzoumana SANOGO
 */

use sylax\Entity\Test;

class TestController extends Controller
{
	public function index(){

		$em = $this->entityManager();
		$allTest = $em->getRepository(Test::class)->findAll();

		$this->render('index', array( 'allTest' => $allTest, ));
	}

	public function create(){

		$em = $this->entityManager();

		$test = new Test();
		$test->setLibelle($_POST['text']);
		$em->persist($test);
		$em->flush();

		header('Location: index');
	}

	public function show($p){

		$em = $this->entityManager();

		$test = $em->getRepository(Test::class)->find($p[0]);

		$this->render('show', array('test' => $test));
	}

	public function edit($p){

		$em = $this->entityManager();

		$test = $em->getRepository(Test::class)->find($p[0]);

		$this->render('edit', array('test' => $test));
	}

	public function update($p){

		$em = $this->entityManager();

		$test = $em->getRepository(Test::class)->find($p[0]);

		$test->setLibelle($_POST['text']);
		$em->persist($test);
		$em->flush();

		header('Location: ../modifier/'.$p[0]);
	}

	public function delete($p){

		$em = $this->entityManager();

		$test = $em->getRepository(Test::class)->find($p[0]);

		$em->remove($test);
		$em->flush();

		header('Location: ../index');
	}
}