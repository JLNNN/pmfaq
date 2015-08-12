<?php
namespace Parrotmedia\Pmfaq\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Julian Stock <stock@parrot-media.de>, PARROT MEDIA
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Eintrag
 */
class Eintrag extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Frage
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $frage = '';

	/**
	 * Antwort
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $antwort = '';

	/**
	 * Kategorien
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Parrotmedia\Pmfaq\Domain\Model\Kategorie>
	 */
	protected $kategorien = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->kategorien = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the frage
	 *
	 * @return string $frage
	 */
	public function getFrage() {
		return $this->frage;
	}

	/**
	 * Sets the frage
	 *
	 * @param string $frage
	 * @return void
	 */
	public function setFrage($frage) {
		$this->frage = $frage;
	}

	/**
	 * Returns the antwort
	 *
	 * @return string $antwort
	 */
	public function getAntwort() {
		return $this->antwort;
	}

	/**
	 * Sets the antwort
	 *
	 * @param string $antwort
	 * @return void
	 */
	public function setAntwort($antwort) {
		$this->antwort = $antwort;
	}

	/**
	 * Adds a Kategorie
	 *
	 * @param \Parrotmedia\Pmfaq\Domain\Model\Kategorie $kategorien
	 * @return void
	 */
	public function addKategorien(\Parrotmedia\Pmfaq\Domain\Model\Kategorie $kategorien) {
		$this->kategorien->attach($kategorien);
	}

	/**
	 * Removes a Kategorie
	 *
	 * @param \Parrotmedia\Pmfaq\Domain\Model\Kategorie $kategorienToRemove The Kategorie to be removed
	 * @return void
	 */
	public function removeKategorien(\Parrotmedia\Pmfaq\Domain\Model\Kategorie $kategorienToRemove) {
		$this->kategorien->detach($kategorienToRemove);
	}

	/**
	 * Returns the kategorien
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Parrotmedia\Pmfaq\Domain\Model\Kategorie> $kategorien
	 */
	public function getKategorien() {
		return $this->kategorien;
	}

	/**
	 * Sets the kategorien
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Parrotmedia\Pmfaq\Domain\Model\Kategorie> $kategorien
	 * @return void
	 */
	public function setKategorien(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $kategorien) {
		$this->kategorien = $kategorien;
	}

}