<?php
    class User extends Database
    {
        # GetName és SetName nem tud működni ebben a formában az adatbázissal, de jó ppélda miatt szerepelnek.
        private string $Name;
        public function SetName($Value)
        {
            $this->Name = $Value;
        }
        public function GetName()
        {
            return $this->Name;
        }
        public function GetEmailByFirstName($FirstName)
        {
            return parent::Query("SELECT `EmailAddress` FROM `User` WHERE `FirstName` = ?", [$FirstName])[0][0];
        }
    }