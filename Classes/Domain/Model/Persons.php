<?php
namespace He\HePersonen\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
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
 * Personendaten
 */
class Persons extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * officeHours
     *
     * @var string
     */
    protected $officeHours = '';
    
    /**
     * foto
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $foto = null;
    
    /**
     * fotoDisplayInternet
     *
     * @var bool
     */
    protected $fotoDisplayInternet = false;
    
    /**
     * feUser
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
     */
    protected $feUser = null;
    
    /**
     * function
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\He\HePersonen\Domain\Model\Functions>
     */
    protected $function = null;
    
    /**
     * __construct
     */
    public function __construct()
    {
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
    protected function initStorageObjects()
    {
        $this->function = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Returns the officeHours
     *
     * @return string $officeHours
     */
    public function getOfficeHours()
    {
        return $this->officeHours;
    }
    
    /**
     * Sets the officeHours
     *
     * @param string $officeHours
     * @return void
     */
    public function setOfficeHours($officeHours)
    {
        $this->officeHours = $officeHours;
    }
    
    /**
     * Returns the foto
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $foto
     */
    public function getFoto()
    {
        return $this->foto;
    }
    
    /**
     * Sets the foto
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $foto
     * @return void
     */
    public function setFoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $foto)
    {
        $this->foto = $foto;
    }
    
    /**
     * Returns the fotoDisplayInternet
     *
     * @return bool $fotoDisplayInternet
     */
    public function getFotoDisplayInternet()
    {
        return $this->fotoDisplayInternet;
    }
    
    /**
     * Sets the fotoDisplayInternet
     *
     * @param bool $fotoDisplayInternet
     * @return void
     */
    public function setFotoDisplayInternet($fotoDisplayInternet)
    {
        $this->fotoDisplayInternet = $fotoDisplayInternet;
    }
    
    /**
     * Returns the boolean state of fotoDisplayInternet
     *
     * @return bool
     */
    public function isFotoDisplayInternet()
    {
        return $this->fotoDisplayInternet;
    }
    
    /**
     * Returns the feUser
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $feUser
     */
    public function getFeUser()
    {
        return $this->feUser;
    }
    
    /**
     * Sets the feUser
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $feUser
     * @return void
     */
    public function setFeUser(\TYPO3\CMS\Extbase\Domain\Model\FrontendUser $feUser)
    {
        $this->feUser = $feUser;
    }
    
    /**
     * Adds a Functions
     *
     * @param \He\HePersonen\Domain\Model\Functions $function
     * @return void
     */
    public function addFunction(\He\HePersonen\Domain\Model\Functions $function)
    {
        $this->function->attach($function);
    }
    
    /**
     * Removes a Functions
     *
     * @param \He\HePersonen\Domain\Model\Functions $functionToRemove The Functions to be removed
     * @return void
     */
    public function removeFunction(\He\HePersonen\Domain\Model\Functions $functionToRemove)
    {
        $this->function->detach($functionToRemove);
    }
    
    /**
     * Returns the function
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\He\HePersonen\Domain\Model\Functions> $function
     */
    public function getFunction()
    {
        return $this->function;
    }
    
    /**
     * Sets the function
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\He\HePersonen\Domain\Model\Functions> $function
     * @return void
     */
    public function setFunction(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $function)
    {
        $this->function = $function;
    }

}