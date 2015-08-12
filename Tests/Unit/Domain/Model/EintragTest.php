<?php

namespace Parrotmedia\Pmfaq\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Julian Stock <stock@parrot-media.de>, PARROT MEDIA
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
 * Test case for class \Parrotmedia\Pmfaq\Domain\Model\Eintrag.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Julian Stock <stock@parrot-media.de>
 */
class EintragTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Parrotmedia\Pmfaq\Domain\Model\Eintrag
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Parrotmedia\Pmfaq\Domain\Model\Eintrag();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getFrageReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFrage()
		);
	}

	/**
	 * @test
	 */
	public function setFrageForStringSetsFrage() {
		$this->subject->setFrage('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'frage',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAntwortReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAntwort()
		);
	}

	/**
	 * @test
	 */
	public function setAntwortForStringSetsAntwort() {
		$this->subject->setAntwort('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'antwort',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getKategorienReturnsInitialValueForKategorie() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getKategorien()
		);
	}

	/**
	 * @test
	 */
	public function setKategorienForObjectStorageContainingKategorieSetsKategorien() {
		$kategorien = new \Parrotmedia\Pmfaq\Domain\Model\Kategorie();
		$objectStorageHoldingExactlyOneKategorien = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneKategorien->attach($kategorien);
		$this->subject->setKategorien($objectStorageHoldingExactlyOneKategorien);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneKategorien,
			'kategorien',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addKategorienToObjectStorageHoldingKategorien() {
		$kategorien = new \Parrotmedia\Pmfaq\Domain\Model\Kategorie();
		$kategorienObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$kategorienObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($kategorien));
		$this->inject($this->subject, 'kategorien', $kategorienObjectStorageMock);

		$this->subject->addKategorien($kategorien);
	}

	/**
	 * @test
	 */
	public function removeKategorienFromObjectStorageHoldingKategorien() {
		$kategorien = new \Parrotmedia\Pmfaq\Domain\Model\Kategorie();
		$kategorienObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$kategorienObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($kategorien));
		$this->inject($this->subject, 'kategorien', $kategorienObjectStorageMock);

		$this->subject->removeKategorien($kategorien);

	}
}
