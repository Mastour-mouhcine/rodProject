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
Editor::inst( $db, 'Seg_Input', 'DT_RowId' )
->fields(
        /* Field::inst('nom')
        ->validator( Validate::notEmpty( ValidateOptions::inst()
            ->message( 'Province is required' ) 
        ) ), */
                                    Field::inst('City'),
                                    Field::inst('company'), 
                                    Field::inst('DT_RowId'),
                                    Field::inst('Salutation'),
                                    Field::inst('Salutation Email'),
                                    Field::inst('Last Name'),
                                    Field::inst('First Name'), 
                                    Field::inst('Sexe'),
                                    Field::inst('Title'),
                                    Field::inst('Preferred Language'),
                                    Field::inst('Email'),
                                    Field::inst('Phone'),
                                    Field::inst('Mobile'),
                                    Field::inst('Addresse'),
                                    Field::inst('Country'),
                                    Field::inst('Region'),
                                    Field::inst('Source'),
                                    Field::inst('Segment 1'),
                                    Field::inst('Segment 2'),
                                    Field::inst('Segment 3'),
                                    Field::inst('Segment 4'),
                                    Field::inst('Segment 5'),
                                    Field::inst('Segment 6'),
                                    Field::inst('Segment 7'),
                                    Field::inst('Brand 1'),
                                    Field::inst('Brand 2'),
                                    Field::inst('Brand 3'),
                                    Field::inst('Secteur 1'),
                                    Field::inst('Solvabilité'),
        )
        ->debug(true)
        ->process( $_POST )
        ->json();