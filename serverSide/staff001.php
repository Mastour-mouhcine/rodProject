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
                                    Field::inst('Salutation_Email'),
                                    Field::inst('Last_Name'),
                                    Field::inst('First_Name'), 
                                    Field::inst('Sexe'),
                                    Field::inst('Title'),
                                    Field::inst('Preferred_Language'),
                                    Field::inst('Email'),
                                    Field::inst('Phone'),
                                    Field::inst('Mobile'),
                                    Field::inst('Address'),
                                    Field::inst('Country'),
                                    Field::inst('Region'),
                                    Field::inst('Source'),
                                    Field::inst('Segment_1'),
                                    Field::inst('Segment_2'),
                                    Field::inst('Segment_3'),
                                    Field::inst('Segment_4'),
                                    Field::inst('Segment_5'),
                                    Field::inst('Segment_6'),
                                    Field::inst('Segment_7'),
                                    Field::inst('Brand_1'),
                                    Field::inst('Brand_2'),
                                    Field::inst('Brand_3'),
                                    Field::inst('Secteur'),
                                    Field::inst('Solvabilite'),
        )
        ->debug(true)
        ->process( $_POST )
        ->json();