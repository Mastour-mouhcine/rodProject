<?php
 
/*
 * Example PHP implementation used for the index.html example
 */
include( "../js/demo/Editor-PHP-2.0.5/lib/DataTables.php" );
// DataTables PHP library
 
// Alias Editor classes so they are easy to use
use
    DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Mjoin,
    DataTables\Editor\Options,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate,
    DataTables\Editor\ValidateOptions;
 
// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'Import_Zoho_Contact_test', 'DT_RowId' )
->fields(
        /* Field::inst('nom')
        ->validator( Validate::notEmpty( ValidateOptions::inst()
            ->message( 'Province is required' ) 
        ) ), */
        
        Field::inst('Salutation'),
        Field::inst('Salutation Emails'),
        Field::inst('First Name'),
        Field::inst('Last Name'),
        Field::inst('Preferred Language'),
        Field::inst('Mobile'),
        Field::inst('Phone'),
        Field::inst('Email'),
        Field::inst('Other Street'),
        Field::inst('Other Zip'),
        Field::inst('Other City'),
        Field::inst('Province (BE)'),      
        Field::inst('Account Name'),
        Field::inst('Lead Status'),
        Field::inst('Acheteur'),
        Field::inst('Vendeur'),
        Field::inst('Prospect Source'),
        Field::inst('Converting Agent'),
        Field::inst('Source list name'),
        
        
        
        
        
        
        
        
        
        
        
        Field::inst('New Import'),
        Field::inst('Contact Owner'),
        Field::inst('Business Finder Name'),
        Field::inst('Home Phone'),
        Field::inst('Secondary Email'),
        Field::inst('Mandataire'),
        Field::inst('Mandataire'),
        Field::inst('Mail du commentaire'),
        Field::inst('Description'),
        )
        ->debug(true)
        ->process( $_POST )
        ->json();
        