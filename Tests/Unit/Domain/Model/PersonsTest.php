<?php

namespace He\HePersonen\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \He\HePersonen\Domain\Model\Persons.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class PersonsTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \He\HePersonen\Domain\Model\Persons
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \He\HePersonen\Domain\Model\Persons();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getOfficeHoursReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getOfficeHours()
		);
	}

	/**
	 * @test
	 */
	public function setOfficeHoursForStringSetsOfficeHours()
	{
		$this->subject->setOfficeHours('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'officeHours',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFotoReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getFoto()
		);
	}

	/**
	 * @test
	 */
	public function setFotoForFileReferenceSetsFoto()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setFoto($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'foto',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFotoDisplayInternetReturnsInitialValueForBool()
	{
		$this->assertSame(
			FALSE,
			$this->subject->getFotoDisplayInternet()
		);
	}

	/**
	 * @test
	 */
	public function setFotoDisplayInternetForBoolSetsFotoDisplayInternet()
	{
		$this->subject->setFotoDisplayInternet(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'fotoDisplayInternet',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFeUserReturnsInitialValueForFrontendUser()
	{	}

	/**
	 * @test
	 */
	public function setFeUserForFrontendUserSetsFeUser()
	{	}

	/**
	 * @test
	 */
	public function getFunctionReturnsInitialValueForFunctions()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getFunction()
		);
	}

	/**
	 * @test
	 */
	public function setFunctionForObjectStorageContainingFunctionsSetsFunction()
	{
		$function = new \He\HePersonen\Domain\Model\Functions();
		$objectStorageHoldingExactlyOneFunction = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneFunction->attach($function);
		$this->subject->setFunction($objectStorageHoldingExactlyOneFunction);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneFunction,
			'function',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addFunctionToObjectStorageHoldingFunction()
	{
		$function = new \He\HePersonen\Domain\Model\Functions();
		$functionObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$functionObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($function));
		$this->inject($this->subject, 'function', $functionObjectStorageMock);

		$this->subject->addFunction($function);
	}

	/**
	 * @test
	 */
	public function removeFunctionFromObjectStorageHoldingFunction()
	{
		$function = new \He\HePersonen\Domain\Model\Functions();
		$functionObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$functionObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($function));
		$this->inject($this->subject, 'function', $functionObjectStorageMock);

		$this->subject->removeFunction($function);

	}
}
