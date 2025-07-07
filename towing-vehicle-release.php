
<?php

/**
 * Template Name: Towing - Vehicle Release
 * Version: 1.0
 * Description: A custom vehicle release template for Towing, Inc.
 * Author: Duppins Technology
 * Author URI: https://duppinstech.com
 * Group: Custom
 * License: GPLv2
 * Required PDF Version: 4.0
 * Tags: vehicle, release, form
 */

/* Prevent direct access to the template (always good to include this) */
if ( ! class_exists( 'GFForms' ) ) {
  return;
}

/**
* All Gravity PDF v4/v5/v6 templates have access to the following variables:
*
* @var array  $form      The current Gravity Forms array
* @var array  $entry     The raw entry data
* @var array  $form_data The processed entry data stored in an array
* @var object $settings  The current PDF configuration
* @var array  $fields    An array of Gravity Forms fields which can be accessed with their ID number
* @var array  $config    The initialised template config class – eg. /config/zadani.php
*/

$regOwner = $form_data['field'][6] ?? '';
$regPhone = $form_data['field'][3] ?? '';
$insCompany = $form_data['field'][4] ?? '';
$insPhone = $form_data['field'][5] ?? '';
$insClaim = $form_data['field'][7] ?? '';

$insCoverage = $form_data['field'][8] ?? '';
$insFault = $form_data['field'][9] ?? '';
$insVehicle = $form_data['field'][10] ?? '';
$insRelease = $form_data['field'][11] ?? '';

$signature = $form_data['signature_details_id'][17]['path']; /* the full path to the signature */
$signDate = $form_data['field'][14] ?? '';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vechicle Release Form</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            font-size: 16px;
            width: 90%;
            margin: auto;
        }
        .section-title {
            text-align: center;
            padding: 0;
            margin: 0;
        }
        table {
            margin: 10px 0;
            line-height: 2;
        }
        td {
            margin-top:20px;
        }
        .field {
            border-bottom: 1px solid black;
            text-align: left;
            font-family: 'Times New Roman', serif;
            font-size: 16px;
        }
        .label {
            text-align: left;
            font-family: 'Times New Roman', serif;
            font-size: 16px;
        }
        .label-sub {
            white-space: nowrap;
            text-align: center;
            font-size: 16px;
        }
        .header {
            padding-top: 5%;
            padding-bottom: 5%;
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <div class="header">
        <h3 class="section-title">TOWING, INC.</h3>
        <h3 class="section-title">ADDITIONAL IMPOUND INFORMATION</h3>
    </div>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="30%">Registered Owner's Name:</td>
            <td class="field"><?php echo esc_html( $regOwner ); ?>&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label" width="30%">Telephone Number:</td>
            <td class="field"><?php echo esc_html( $regPhone ); ?>&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label" width="30%">&nbsp;</td>
            <td class="label-sub">(Please provide the best number to reach you)</td>
        </tr>
        <tr class="row">
            <td class="label" width="30%">Insurance Company:</td>
            <td class="field"><?php echo esc_html( $insCompany ); ?>&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label" width="30%">Telephone Number:</td>
            <td class="field"><?php echo esc_html( $insPhone ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="30%">Do you have full coverage?</td>
            <td class="field" width="15%" style="text-align:center;">
                <?php if ( $insCoverage == "Yes" ) { echo "X"; } ?>&nbsp;</td>
            </td>
            <td class="label" width="5%">YES</td>
            <td class="field" width="15%" style="text-align:center;">
                <?php if ( $insCoverage == "No" ) { echo "X"; } ?>&nbsp;</td>
            </td>
            <td class="label" width="5%">NO</td>
            <td class="label" width="30%">&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label" width="30%">Were you at fault?</td>
            <td class="field" width="15%" style="text-align:center;">
                <?php if ( $insFault == "Yes" ) { echo "X"; } ?>&nbsp;</td>
            </td>
            <td class="label" width="5%">YES</td>
            <td class="field" width="15%" style="text-align:center;">
                <?php if ( $insFault == "No" ) { echo "X"; } ?>&nbsp;</td>
            </td>
            <td class="label" width="5%">NO</td>
            <td class="label" width="30%">&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="52%">Is the insurance company picking up your vehicle?</td>
            <td class="field" width="15%" style="text-align:center;">
                <?php if ( $insVehicle == "Yes" ) { echo "X"; } ?>&nbsp;</td>
            </td>
            <td class="label" width="5%">YES</td>
            <td class="field" width="15%" style="text-align:center;">
                <?php if ( $insVehicle == "No" ) { echo "X"; } ?>&nbsp;</td>
            </td>
            <td class="label" width="5%">NO</td>
            <td class="label" width="9%">&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="47%">If not, who should we release your vehicle to?</td>
            <td class="field"><?php echo esc_html( $insRelease ); ?>&nbsp;</td>
        </tr>
    </table>
    <br />
    <br />
    <br />
    <!-- FOOTER -->
    <p>I authorize Towing, Inc. to release my vehicle to either my insurance company (or their representatives) or to the company/person stated above.</p>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="40%">Registered Owner's Signature:</td>
            <td class="field">
                <?php 
                    //echo esc_html( $signature );
                    /* Output signature if it exists (this prevents a red X showing up in the PDF when the image doesn't exist) */
                    if ( is_file( $signature ) ) {
                        echo '<img src="' . esc_attr( $signature ) . '" width="150" />'; /* best to use the path to reference the image and check it exists on the server first */
                    } 
                ?>&nbsp;
            </td>
        </tr>
        <tr class="row">
            <td class="label" width="40%">Date:</td>
            <td class="field"><?php echo esc_html( $signDate ); ?>&nbsp;</td>
        </tr>
    </table>
</body>
</html>
