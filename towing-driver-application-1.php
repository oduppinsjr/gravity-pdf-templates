
<?php

/**
 * Template Name: Towing - Driver Application
 * Version: 1.0
 * Description: A custom job application template for Towing & Recovery.
 * Author: Duppins Technology
 * Author URI: https://duppinstech.com
 * Group: Towing
 * License: GPLv2
 * Required PDF Version: 4.0
 * Tags: job, employment, application
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

$dateToday = $form_data['field'][23] ?? '';
$firstName = $form_data['field'][1]['first'] ?? '';
$middleName = $form_data['field'][1]['middle'] ?? '';
$lastName = $form_data['field'][1]['last'] ?? '';

$currAddrSt1 = $form_data['field'][21]['street'] ?? '';
$currAddrSt2 = $form_data['field'][21]['street2'] ?? '';
$currAddrCty = $form_data['field'][21]['city'] ?? '';
$currAddrState = $form_data['field'][21]['state'] ?? '';
$currAddrZip = $form_data['field'][21]['zip'] ?? '';

$homeTel = $form_data['field'][24] ?? '';
$cellTel = $form_data['field'][25] ?? '';
$dob = $form_data['field'][26] ?? '';
$ssn = $form_data['field'][28] ?? '';

$prevAddr1St1 = $form_data['field'][35]['street'] ?? '';
$prevAddr1St2 = $form_data['field'][35]['street2'] ?? '';
$prevAddr1Cty = $form_data['field'][35]['city'] ?? '';
$prevAddr1State = $form_data['field'][35]['state'] ?? '';
$prevAddr1Zip = $form_data['field'][35]['zip'] ?? '';
$PrevAdd1DtFrom = $form_data['field'][36] ?? '';
$PrevAdd1DtTo = $form_data['field'][37] ?? '';

$prevAddr2St1 = $form_data['field'][29]['street'] ?? '';
$prevAddr2St2 = $form_data['field'][29]['street2'] ?? '';
$prevAddr2Cty = $form_data['field'][29]['city'] ?? '';
$prevAddr2State = $form_data['field'][29]['state'] ?? '';
$prevAddr2Zip = $form_data['field'][29]['zip'] ?? '';
$PrevAdd2DtFrom = $form_data['field'][38] ?? '';
$PrevAdd2DtTo = $form_data['field'][39] ?? '';

$prevAddr3St1 = $form_data['field'][35]['street'] ?? '';
$prevAddr3St2 = $form_data['field'][35]['street2'] ?? '';
$prevAddr3Cty = $form_data['field'][35]['city'] ?? '';
$prevAddr3State = $form_data['field'][35]['state'] ?? '';
$prevAddr3Zip = $form_data['field'][35]['zip'] ?? '';
$PrevAdd3DtFrom = $form_data['field'][41] ?? '';
$PrevAdd3DtTo = $form_data['field'][42] ?? '';

$dl1State = $form_data['list'][5][0]['State'] ?? '';
$dl1Num = $form_data['list'][5][0]['Number'] ?? '';
$dl1Exp = $form_data['list'][5][0]['Expiration Date'] ?? '';
$dl2State = $form_data['list'][5][1]['State'] ?? '';
$dl2Num = $form_data['list'][5][1]['Number'] ?? '';
$dl2Exp = $form_data['list'][5][1]['Expiration Date'] ?? '';
$dl3State = $form_data['list'][5][2]['State'] ?? '';
$dl3Num = $form_data['list'][5][2]['Number'] ?? '';
$dl3Exp = $form_data['list'][5][2]['Expiration Date'] ?? '';

$vehicle1 = $form_data['list'][44][0]['Type of Vehicle Driven'] ?? '';
$vehicle1Dates = $form_data['list'][44][0]['Dates'] ?? '';
$vehicle1Miles = $form_data['list'][44][0]['Approximate Mileage Driven'] ?? '';
$vehicle2 = $form_data['list'][44][1]['Type of Vehicle Driven'] ?? '';
$vehicle2Dates = $form_data['list'][44][1]['Dates'] ?? '';
$vehicle2Miles = $form_data['list'][44][1]['Approximate Mileage Driven'] ?? '';
$vehicle3 = $form_data['list'][44][2]['Type of Vehicle Driven'] ?? '';
$vehicle3Dates = $form_data['list'][44][2]['Dates'] ?? '';
$vehicle3Miles = $form_data['list'][44][2]['Approximate Mileage Driven'] ?? '';

$accident1Date = $form_data['list'][45][0]['Date'] ?? '';
$accident1Desc = $form_data['list'][45][0]['Describe'] ?? '';
$accident1Fatal = $form_data['list'][45][0]['Fatalities'] ?? '';
$accident1Injury = $form_data['list'][45][0]['Injuries'] ?? '';
$accident2Date = $form_data['list'][45][1]['Date'] ?? '';
$accident2desc = $form_data['list'][45][1]['Describe'] ?? '';
$accident2Fatal = $form_data['list'][45][1]['Fatalities'] ?? '';
$accident2Injury = $form_data['list'][45][1]['Injuries'] ?? '';
$accident3Date = $form_data['list'][45][2]['Date'] ?? '';
$accident3Desc = $form_data['list'][45][2]['Describe'] ?? '';
$accident3Fatal = $form_data['list'][45][2]['Fatalities'] ?? '';
$accident3Injury = $form_data['list'][45][2]['Injuries'] ?? '';

$violations1Date = $form_data['list'][46][0]['Date'] ?? '';
$violations1Vio = $form_data['list'][46][0]['Violation'] ?? '';
$violations1State = $form_data['list'][46][0]['State'] ?? '';
$violations1Comm = $form_data['list'][46][0]['Commercial Vehicle'] ?? '';
$violations2Date = $form_data['list'][46][1]['Date'] ?? '';
$violations2Vio = $form_data['list'][46][1]['Violation'] ?? '';
$violations2State = $form_data['list'][46][1]['State'] ?? '';
$violations2Comm = $form_data['list'][46][1]['Commercial Vehicle'] ?? '';
$violations3Date = $form_data['list'][46][2]['Date'] ?? '';
$violations3Vio = $form_data['list'][46][2]['Violation'] ?? '';
$violations3State = $form_data['list'][46][2]['State'] ?? '';
$violations3Comm = $form_data['list'][46][2]['Commercial Vehicle'] ?? '';
$violations4Date = $form_data['list'][46][3]['Date'] ?? '';
$violations4Vio = $form_data['list'][46][3]['Violation'] ?? '';
$violations4State = $form_data['list'][46][3]['State'] ?? '';
$violations4Comm = $form_data['list'][46][3]['Commercial Vehicle'] ?? '';
$violations5Date = $form_data['list'][46][4]['Date'] ?? '';
$violations5Vio = $form_data['list'][46][4]['Violation'] ?? '';
$violations5State = $form_data['list'][46][4]['State'] ?? '';
$violations5Comm = $form_data['list'][46][4]['Commercial Vehicle'] ?? '';
$violations6Date = $form_data['list'][46][5]['Date'] ?? '';
$violations6Vio = $form_data['list'][46][5]['Violation'] ?? '';
$violations6State = $form_data['list'][46][5]['State'] ?? '';
$violations6Comm = $form_data['list'][46][5]['Commercial Vehicle'] ?? '';
$violations7Date = $form_data['list'][46][6]['Date'] ?? '';
$violations7Vio = $form_data['list'][46][6]['Violation'] ?? '';
$violations7State = $form_data['list'][46][6]['State'] ?? '';
$violations7Comm = $form_data['list'][46][6]['Commercial Vehicle'] ?? '';
$violations8Date = $form_data['list'][46][7]['Date'] ?? '';
$violations8Vio = $form_data['list'][46][7]['Violation'] ?? '';
$violations8State = $form_data['list'][46][7]['State'] ?? '';
$violations8Comm = $form_data['list'][46][7]['Commercial Vehicle'] ?? '';

$revoked = $form_data['field'][47] ?? '';
$revokedExp = $form_data['field'][125] ?? '';

$emp1 = $form_data['field'][48] ?? '';
$emp1DtFrom = $form_data['field'][50] ?? '';
$emp1DtTo = $form_data['field'][49] ?? '';
$emp1AddrSt1 = $form_data['field'][51]['street'] ?? '';
$emp1AddrSt2 = $form_data['field'][51]['street2'] ?? '';
$emp1AddrCity = $form_data['field'][51]['city'] ?? '';
$emp1AddrState = $form_data['field'][51]['state'] ?? '';
$emp1AddrZip = $form_data['field'][51]['zip'] ?? '';
$emp1Super = $form_data['field'][52] ?? '';
$emp1Tel = $form_data['field'][53] ?? '';
$emp1FMCSR = $form_data['field'][54] ?? '';
$emp1CFR = $form_data['field'][55] ?? '';
$emp1Reason = $form_data['field'][56] ?? '';

$emp1CFR = 'checked';
$emp2 = $form_data['field'][71] ?? '';
$emp2DtFrom = $form_data['field'][83] ?? '';
$emp2DtTo = $form_data['field'][77] ?? '';
$emp2AddrSt1 = $form_data['field'][89]['street'] ?? '';
$emp2AddrSt2 = $form_data['field'][89]['street2'] ?? '';
$emp2AddrCity = $form_data['field'][89]['city'] ?? '';
$emp2AddrState = $form_data['field'][89]['state'] ?? '';
$emp2AddrZip = $form_data['field'][89]['zip'] ?? '';
$emp2Super = $form_data['field'][100] ?? '';
$emp2Tel = $form_data['field'][106] ?? '';
$emp2FMCSR = $form_data['field'][124] ?? '';
$emp2CFR = $form_data['field'][118] ?? '';
$emp2Reason = $form_data['field'][112] ?? '';

$emp3 = $form_data['field'][70] ?? '';
$emp3DtFrom = $form_data['field'][82] ?? '';
$emp3DtTo = $form_data['field'][76] ?? '';
$emp3AddrSt1 = $form_data['field'][88]['street'] ?? '';
$emp3AddrSt2 = $form_data['field'][88]['street2'] ?? '';
$emp3AddrCity = $form_data['field'][88]['city'] ?? '';
$emp3AddrState = $form_data['field'][88]['state'] ?? '';
$emp3AddrZip = $form_data['field'][88]['zip'] ?? '';
$emp3Super = $form_data['field'][99] ?? '';
$emp3Tel = $form_data['field'][104] ?? '';
$emp3FMCSR = $form_data['field'][123] ?? '';
$emp3CFR = $form_data['field'][117] ?? '';
$emp3Reason = $form_data['field'][111] ?? '';

$emp4 = $form_data['field'][69] ?? '';
$emp4DtFrom = $form_data['field'][81] ?? '';
$emp4DtTo = $form_data['field'][75] ?? '';
$emp4AddrSt1 = $form_data['field'][87]['street'] ?? '';
$emp4AddrSt2 = $form_data['field'][87]['street2'] ?? '';
$emp4AddrCity = $form_data['field'][87]['city'] ?? '';
$emp4AddrState = $form_data['field'][87]['state'] ?? '';
$emp4AddrZip = $form_data['field'][87]['zip'] ?? '';
$emp4Super = $form_data['field'][98] ?? '';
$emp4Tel = $form_data['field'][103] ?? '';
$emp4FMCSR = $form_data['field'][122] ?? '';
$emp4CFR = $form_data['field'][116] ?? '';
$emp4Reason = $form_data['field'][110] ?? '';

$emp5 = $form_data['field'][68] ?? '';
$emp5DtFrom = $form_data['field'][80] ?? '';
$emp5DtTo = $form_data['field'][74] ?? '';
$emp5AddrSt1 = $form_data['field'][86]['street'] ?? '';
$emp5AddrSt2 = $form_data['field'][86]['street2'] ?? '';
$emp5AddrCity = $form_data['field'][86]['city'] ?? '';
$emp5AddrState = $form_data['field'][86]['state'] ?? '';
$emp5AddrZip = $form_data['field'][86]['zip'] ?? '';
$emp5Super = $form_data['field'][97] ?? '';
$emp5Tel = $form_data['field'][102] ?? '';
$emp5FMCSR = $form_data['field'][121] ?? '';
$emp5CFR = $form_data['field'][115] ?? '';
$emp5Reason = $form_data['field'][109] ?? '';

$emp6 = $form_data['field'][67] ?? '';
$emp6DtFrom = $form_data['field'][79] ?? '';
$emp6DtTo = $form_data['field'][73] ?? '';
$emp6AddrSt1 = $form_data['field'][85]['street'] ?? '';
$emp6AddrSt2 = $form_data['field'][85]['street2'] ?? '';
$emp6AddrCity = $form_data['field'][85]['city'] ?? '';
$emp6AddrState = $form_data['field'][85]['state'] ?? '';
$emp6AddrZip = $form_data['field'][85]['zip'] ?? '';
$emp6Super = $form_data['field'][96] ?? '';
$emp6Tel = $form_data['field'][101] ?? '';
$emp6FMCSR = $form_data['field'][120] ?? '';
$emp6CFR = $form_data['field'][114] ?? '';
$emp6Reason = $form_data['field'][108] ?? '';

$emp7 = $form_data['field'][66] ?? '';
$emp7DtFrom = $form_data['field'][78] ?? '';
$emp7DtTo = $form_data['field'][72] ?? '';
$emp7AddrSt1 = $form_data['field'][84]['street'] ?? '';
$emp7AddrSt2 = $form_data['field'][84]['street2'] ?? '';
$emp7AddrCity = $form_data['field'][84]['city'] ?? '';
$emp7AddrState = $form_data['field'][84]['state'] ?? '';
$emp7AddrZip = $form_data['field'][84]['zip'] ?? '';
$emp7Super = $form_data['field'][95] ?? '';
$emp7Tel = $form_data['field'][105] ?? '';
$emp7FMCSR = $form_data['field'][119] ?? '';
$emp7CFR = $form_data['field'][113] ?? '';
$emp7Reason = $form_data['field'][107] ?? '';

$signature = $form_data['signature_details_id'][127]['path']; /* the full path to the signature */
$signDate = $form_data['field'][60] ?? '';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Driver Qualification File</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            font-size: 11px;
            line-height: 1.5;
            width: 90%;
            margin: auto;
        }
        .section-title {
            text-align: center;
            padding: 0;
            margin: 0;
        }
        .section-title-sub-b {
            font-size: 11px;
            font-weight: bold;
            padding: 0;
            margin: 0;
        }
        .section-title-sub-u {
            font-size: 11px;
            text-decoration: underline;
            font-weight: bold;
            padding: 0;
            margin: 0;
        }
        table {
            margin: 10px 0;
        }
        td {
            margin-top:20px;
        }
        hr.thick {
            margin-bottom: 0;
        }
        .field {
            border-bottom: 1px solid black;
            text-align: left;
            font-size: 11px;
            font-family: 'Times New Roman', serif;
        }
        .label {
            font-size: 11px;
            text-align: left;
            font-weight: bold;
            font-family: 'Times New Roman', serif;
        }
        .label-sub {
            white-space: nowrap;
            text-align: center;
            font-size: 0.75em;
        }
        .thick {
            height:5px;
            color: black;
            background-color: black;
        }
        .dotted {
            border-top:2px dotted;
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <h3 class="section-title" style="text-decoration: underline;">
        Towing & Recovery, Inc<br />
        123 Street Ave.<br />Somewhere, MD 21111<br />
        555-555-5555
    </h3>
    <hr class="thick">
    <h2 class="section-title">COMMERCIAL DRIVER APPLICATION</h2>
    <p class="section-title">FILL IN <u>ALL</u> BLANKS & PROVIDE <u>ALL</u> INFORMATION REQUESTED--PRINT OR TYPE</p>
    <hr class="dotted">
    <table autosize="1" width="50%">
        <tr class="row">
            <td class="label" width="4.5%">Date:</td>
            <td class="field"><?php echo esc_html( $dateToday ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="8%">Name:</td>
            <td class="label" width="4.5%">First:</td>
            <td class="field"><?php echo esc_html( $firstName ); ?>&nbsp;</td>

            <td class="label" width="6.5%">Middle:</td>
            <td class="field" width="20%"><?php echo esc_html( $middleName ); ?>&nbsp;</td>
            
            <td class="label" width="4%">Last:</td>
            <td class="field"><?php echo esc_html( $lastName ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="7%">Address:</td>
            <td class="field" width="40%"><?php echo esc_html( $currAddrSt1 . ' ' . $currAddrSt2 ); ?>&nbsp;</td>

            <td class="label" width="17%" style="text-align:right;padding-right:5px;">Home telephone:</td>
            <td class="field"><?php echo esc_html( $homeTel ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3.5%">City</td>
            <td class="field" width="16%"><?php echo esc_html( $currAddrCty ); ?>&nbsp;</td>

            <td class="label" width="4.5%">State</td>
            <td class="field" width="12%"><?php echo esc_html( $currAddrState ); ?>&nbsp;</td>

            <td class="label" width="3%">Zip</td>
            <td class="field" width="7%"><?php echo esc_html( $currAddrZip ); ?>&nbsp;</td>

            <td class="label" width="18%" style="text-align:right;padding-right:5px;">Cellular telephone:</td>
            <td class="field"><?php echo esc_html( $cellTel ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="11%">Date of Birth:</td>
            <td class="field"><?php echo esc_html( $dob ); ?>&nbsp;</td>

            <td class="label" width="23%" style="text-align:right;padding-right:5px;">Social Security Number:</span>
            <td class="field"><?php echo esc_html( $ssn ); ?>&nbsp;</td>
        </tr>
    </table>
    <hr class="thick">
    <!-- ADDRESSES -->
    <p class="section-title-sub-u">If your above address is less than 3 years continue listing them below to cover the previous 3 year period:</p>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%">1</td>
            <td class="label" width="5%">Street</td>
            <td class="field" width="55%"><?php echo esc_html( $prevAddr1St1 . ' ' . $prevAddr1St2 ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:5%;">Dates: From</td>
            <td class="field"><?php echo esc_html( $PrevAdd1DtFrom ); ?>&nbsp;</td>
            <td class="label" width="3%">To</td>
            <td class="field"><?php echo esc_html( $PrevAdd1DtTo ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="3.5%">City</td>
            <td class="field"><?php echo esc_html( $prevAddr1Cty ); ?>&nbsp;</td>
            <td class="label" width="4.5%">State</td>
            <td class="field" width="12%"><?php echo esc_html( $prevAddr1State ); ?>&nbsp;</td>
            <td class="label" width="3%">Zip</td>
            <td class="field" width="7%"><?php echo esc_html( $prevAddr1Zip ); ?>&nbsp;</td>
            <td class="label" width="35%"></td>
        </tr>
    </table>
    <hr class="dotted">
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%">2</td>
            <td class="label" width="5%">Street</td>
            <td class="field" width="55%"><?php echo esc_html( $prevAddr2St1 . ' ' . $prevAddr2St2 ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:5%;">Dates: From</td>
            <td class="field"><?php echo esc_html( $PrevAdd2DtFrom ); ?>&nbsp;</td>
            <td class="label" width="3%">To</td>
            <td class="field"><?php echo esc_html( $PrevAdd2DtTo ); ?>&nbsp;</td>
        </tr>
    </table>
    <table>
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="3.5%">City</td>
            <td class="field"><?php echo esc_html( $prevAddr2Cty ); ?>&nbsp;</td>
            <td class="label" width="4.5%">State</td>
            <td class="field" width="12%"><?php echo esc_html( $prevAddr2State ); ?>&nbsp;</td>
            <td class="label" width="3%">Zip</td>
            <td class="field" width="7%"><?php echo esc_html( $prevAddr2Zip ); ?>&nbsp;</td>
            <td class="label" width="35%"></td>
        </tr>
    </table>
    <hr class="dotted">
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%">3</td>
            <td class="label" width="5%">Street</td>
            <td class="field" width="55%"><?php echo esc_html( $prevAddr3St1 . ' ' . $prevAddr3St2 ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:5%;">Dates: From</td>
            <td class="field"><?php echo esc_html( $PrevAdd3DtFrom ); ?>&nbsp;</td>
            <td class="label" width="3%">To</td>
            <td class="field"><?php echo esc_html( $PrevAdd3DtTo ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="3.5%">City</td>
            <td class="field"><?php echo esc_html( $prevAddr3Cty ); ?>&nbsp;</td>
            <td class="label" width="4.5%">State</td>
            <td class="field" width="12%"><?php echo esc_html( $prevAddr3State ); ?>&nbsp;</td>
            <td class="label" width="3%">Zip</td>
            <td class="field" width="7%"><?php echo esc_html( $prevAddr3Zip ); ?>&nbsp;</td>
            <td class="label" width="35%"></td>
        </tr>
    </table>
    <p class="section-title-sub-u" style="text-align: center;">Use backside of sheet for additional addresses</p>
    <hr class="thick">
    <!-- DRIVERS LICENSE -->
    <p class="section-title-sub-u">Driver’s License Information: all licenses held, last 3 years:</p>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="4.5%">State</td>
            <td class="field" width="25%"><?php echo esc_html( $dl1State ); ?>&nbsp;</td>
            <td class="label" width="7%">Number</td>
            <td class="field" width="25%"><?php echo esc_html( $dl1Num ); ?>&nbsp;</td>
            <td class="label" width="12.5%">Expiration Date</td>
            <td class="field" width="25%"><?php echo esc_html( $dl1Exp ); ?>&nbsp;</td>
        </tr>
        </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="4.5%">State</td>
            <td class="field" width="25%"><?php echo esc_html( $dl2State ); ?>&nbsp;</td>
            <td class="label" width="7%">Number</td>
            <td class="field" width="25%"><?php echo esc_html( $dl2Num ); ?>&nbsp;</td>
            <td class="label" width="12.5%">Expiration Date</td>
            <td class="field" width="25%"><?php echo esc_html( $dl2Exp ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="4.5%">State</td>
            <td class="field" width="25%"><?php echo esc_html( $dl3State ); ?>&nbsp;</td>
            <td class="label" width="7%">Number</td>
            <td class="field" width="25%"><?php echo esc_html( $dl3Num ); ?>&nbsp;</td>
            <td class="label" width="12.5%">Expiration Date</td>
            <td class="field" width="25%"><?php echo esc_html( $dl3Exp ); ?>&nbsp;</td>
        </tr>
    </table>
    <hr class="thick">
    <!--EXPERIENCE -->
    <p class="section-title-sub-u">Experience:</p>
    <table autosize="1">
        <tr class="row">
            <td class="field" style="text-align:center;"><?php echo esc_html( $vehicle1 ); ?>&nbsp;</td>
            <td class="field" style="text-align:center;"><?php echo esc_html( $vehicle1Dates ); ?>&nbsp;</td>
            <td class="field" style="text-align:center;"><?php echo esc_html( $vehicle1Miles ); ?>&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label-sub">Type of vehicle driven</td>
            <td class="label-sub">Dates</td>
            <td class="label-sub">Approximate mileage driven</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field"><?php echo esc_html( $vehicle2 ); ?>&nbsp;</td>
            <td class="field"><?php echo esc_html( $vehicle2Dates ); ?>&nbsp;</td>
            <td class="field"><?php echo esc_html( $vehicle2Miles ); ?>&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label-sub">Type of vehicle driven</td>
            <td class="label-sub">Dates</td>
            <td class="label-sub">Approximate mileage driven</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field"><?php echo esc_html( $vehicle3 ); ?>&nbsp;</td>
            <td class="field"><?php echo esc_html( $vehicle3Dates ); ?>&nbsp;</td>
            <td class="field"><?php echo esc_html( $vehicle3Miles ); ?>&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label-sub">Type of vehicle driven</td>
            <td class="label-sub">Dates</td>
            <td class="label-sub">Approximate mileage driven</td>
        </tr>
    </table>
    <hr class="thick">
    <!-- ACCIDENTS -->
    <p class="section-title-sub-u">All Accidents, last 3 years: (If none, write NONE)</p>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="4.5%">Date</td>
            <td class="field" width="15%"><?php echo esc_html( $accident1Date ); ?>&nbsp;</td>
            <td class="label" width="7.5%">Describe</td>
            <td class="field" width="30%"><?php echo esc_html( $accident1Desc ); ?>&nbsp;</td>
            <td class="label" width="8%">Fatalities</td>
            <td class="field" width="15%"><?php echo esc_html( $accident1Fatal ); ?>&nbsp;</td>
            <td class="label" width="7%">Injuries</td>
            <td class="field" width="15%"><?php echo esc_html( $accident1Injury ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="4.5%">Date</td>
            <td class="field" width="15%"><?php echo esc_html( $accident2Date ); ?>&nbsp;</td>
            <td class="label" width="7.5%">Describe</td>
            <td class="field" width="30%"><?php echo esc_html( $accident2Desc ); ?>&nbsp;</td>
            <td class="label" width="8%">Fatalities</td>
            <td class="field" width="15%"><?php echo esc_html( $accident2Fatal ); ?>&nbsp;</td>
            <td class="label" width="7%">Injuries</td>
            <td class="field" width="15%"><?php echo esc_html( $accident2Injury ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="4.5%">Date</td>
            <td class="field" width="15%"><?php echo esc_html( $accident3Date ); ?>&nbsp;</td>
            <td class="label" width="7.5%">Describe</td>
            <td class="field" width="30%"><?php echo esc_html( $accident3Desc ); ?>&nbsp;</td>
            <td class="label" width="8%">Fatalities</td>
            <td class="field" width="15%"><?php echo esc_html( $accident3Fatal ); ?>&nbsp;</td>
            <td class="label" width="7%">Injuries</td>
            <td class="field" width="15%"><?php echo esc_html( $accident3Injury ); ?>&nbsp;</td>
        </tr>
    </table>
    <hr class="thick">
    <!-- TRAFFIC VIOLATIONS -->
    <p class="section-title-sub-u">List all Traffic Violations Convictions, last 3 years: (If none, write NONE)</p>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="4.5%">Date</td>
            <td class="field" width="20%"><?php echo esc_html( $violations1Date ); ?>&nbsp;</td>
            <td class="label" width="8%">Violation</td>
            <td class="field" width="28%"><?php echo esc_html( $violations1Vio ); ?>&nbsp;</td>
            <td class="label" width="4.5%">State</td>
            <td class="field" width="12%"><?php echo esc_html( $violations1State ); ?>&nbsp;</td>
            <td class="label" width="17%">Commercial Vehicle</td>
            <td><input type="checkbox" <?php if ( $violations1Comm == "Yes" || $violations1Comm == "Y" ) { echo "checked=checked"; } ?>/></td>
            <td class="label">/</td>
            <td><input type="checkbox" <?php if ( $violations1Comm == "No" || $violations1Comm == "N" ) { echo "checked=checked"; } ?>/></td>
        </tr>
        <tr class="row">
            <td class="label">Date</td>
            <td class="field"><?php echo esc_html( $violations2Date ); ?>&nbsp;</td>
            <td class="label">Violation</td>
            <td class="field"><?php echo esc_html( $violations2Vio ); ?>&nbsp;</td>
            <td class="label">State</td>
            <td class="field" width="12%"><?php echo esc_html( $violations2State ); ?>&nbsp;</td>
            <td class="label">Commercial Vehicle</td>
            <td><input type="checkbox" <?php if ( $violations2Comm == "Yes" || $violations2Comm == "Y" ) { echo "checked=checked"; } ?>/>&nbsp;</td>
            <td class="label">/</td>
            <td><input type="checkbox" <?php if ( $violations2Comm == "No" || $violations2Comm == "N" ) { echo "checked=checked"; } ?>/>&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label">Date</td>
            <td class="field"><?php echo esc_html( $violations3Date ); ?>&nbsp;</td>
            <td class="label">Violation</td>
            <td class="field"><?php echo esc_html( $violations3Vio ); ?>&nbsp;</td>
            <td class="label">State</td>
            <td class="field" width="12%"><?php echo esc_html( $violations3State ); ?>&nbsp;</td>
            <td class="label">Commercial Vehicle</td>
            <td><input type="checkbox" <?php if ( $violations3Comm == "Yes" || $violations3Comm == "Y" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label">/</td>
            <td><input type="checkbox" <?php if ( $violations3Comm == "No" || $violations3Comm == "N" ) { echo "checked=checked"; } ?> />&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label">Date</td>
            <td class="field"><?php echo esc_html( $violations4Date ); ?>&nbsp;</td>
            <td class="label">Violation</td>
            <td class="field"><?php echo esc_html( $violations4Vio ); ?>&nbsp;</td>
            <td class="label">State</td>
            <td class="field" width="12%"><?php echo esc_html( $violations4State ); ?>&nbsp;</td>
            <td class="label">Commercial Vehicle</td>
            <td><input type="checkbox" <?php if ( $violations4Comm == "Yes" || $violations4Comm == "Y" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label">/</td>
            <td><input type="checkbox" <?php if ( $violations4Comm == "No" || $violations4Comm == "N" ) { echo "checked=checked"; } ?> />&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label">Date</td>
            <td class="field"><?php echo esc_html( $violations5Date ); ?>&nbsp;</td>
            <td class="label">Violation</td>
            <td class="field"><?php echo esc_html( $violations5Vio ); ?>&nbsp;</td>
            <td class="label">State</td>
            <td class="field" width="12%"><?php echo esc_html( $violations5State ); ?>&nbsp;</td>
            <td class="label">Commercial Vehicle</td>
            <td><input type="checkbox" <?php if ( $violations5Comm == "Yes" || $violations5Comm == "Y" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label">/</td>
            <td><input type="checkbox" <?php if ( $violations5Comm == "No" || $violations5Comm == "N" ) { echo "checked=checked"; } ?> />&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label">Date</td>
            <td class="field"><?php echo esc_html( $violations6Date ); ?>&nbsp;</td>
            <td class="label">Violation</td>
            <td class="field"><?php echo esc_html( $violations6Vio ); ?>&nbsp;</td>
            <td class="label">State</td>
            <td class="field" width="12%"><?php echo esc_html( $violations6State ); ?>&nbsp;</td>
            <td class="label">Commercial Vehicle</td>
            <td><input type="checkbox" />&nbsp;</td>
            <td class="label">/</td>
            <td><input type="checkbox" />&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label">Date</td>
            <td class="field"><?php echo esc_html( $violations7Date ); ?>&nbsp;</td>
            <td class="label">Violation</td>
            <td class="field"><?php echo esc_html( $violations7Vio ); ?>&nbsp;</td>
            <td class="label">State</td>
            <td class="field" width="12%"><?php echo esc_html( $violations7State ); ?>&nbsp;</td>
            <td class="label">Commercial Vehicle</td>
            <td><input type="checkbox" />&nbsp;</td>
            <td class="label">/</td>
            <td><input type="checkbox" />&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label">Date</td>
            <td class="field"><?php echo esc_html( $violations8Date ); ?>&nbsp;</td>
            <td class="label">Violation</td>
            <td class="field"><?php echo esc_html( $violations8Vio ); ?>&nbsp;</td>
            <td class="label">State</td>
            <td class="field" width="12%"><?php echo esc_html( $violations8State ); ?>&nbsp;</td>
            <td class="label">Commercial Vehicle</td>
            <td><input type="checkbox" />&nbsp;</td>
            <td class="label">/</td>
            <td><input type="checkbox" />&nbsp;</td>
        </tr>
    </table>
    <hr class="thick">
    <!-- SUSPENDED/REVOKED -->
    <p>Have you ever had any driver license denied, suspended, revoked or canceled by any issuing state agency?</p>
    <table autosize="1">
        <tr class="row">
            <td class="checkbox" width="3%"><input type="checkbox" <?php if ( $revoked == "Yes" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">Yes</td>
            <td class="checkbox" width="3%"><input type="checkbox" <?php if ( $revoked == "No" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="6%">No</td>
            <td class="label" width="29%">If yes; state of issuance; explanation:</td>
            <td class="field"><?php echo esc_html( $revokedExp ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">&nbsp;</td>
        </tr>
    </table>
    <hr class="thick">
    <!-- EMPLOYMENT HISTORY -->
    <p><span class="section-title-sub-u">Employment History, last 10 years (383.35)—account for gaps between employers:</span> (If owner/operator, list carriers leased to)</p>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="2%">1)</td>
            <td class="label" width="5.5%">Employer:</td>
            <td class="field" width="40%"><?php echo esc_html( $emp1 ); ?>&nbsp;</td>
            <td class="label" width="5.5%" style="padding-left:5.5%;text-align:right;">Dates:</td>
            <td class="field" width="11%"><?php echo esc_html( $emp1DtFrom ); ?>&nbsp;</td>
            <td class="label" width="2.5%">to</td>
            <td class="field" width="11%"><?php echo esc_html( $emp1DtTo ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="7%">Address:</td>
            <td class="field" width="46%"><?php echo esc_html( $emp1AddrSt1 . ' ' . $emp1AddrSt2 ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:5%;text-align:right;">Supervisor:</td>
            <td class="field"><?php echo esc_html( $emp1Super ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="16%">City, State, Zip code:</td>
            <td class="field" width="37%"><?php echo esc_html( $emp1AddrCity . ', ' . $emp1AddrState . ' ' . $emp1AddrZip ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:4.5%;text-align:right;">Telephone:</td>
            <td class="field"><?php echo esc_html( $emp1Tel ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
    <tr class="row">
        <td class="label">Were you subject to the Federal Motor Carrier Safety Regulations during this period?</td>
        <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp1FMCSR == "Yes" ) { echo "checked=checked"; } ?> />&nbsp;</td>
        <td class="label" width="4%">Yes</td>
        <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp1FMCSR == "No" ) { echo "checked=checked"; } ?> />&nbsp;</td>
        <td class="label" width="4%">No</td>
    </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">Were you subject to 49 CFR part 40 controlled substance and alcohol testing during this period?</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp1CFR == "Yes" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">Yes</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp1CFR == "No" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">No</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="15.5%">Reason for Leaving:</td>
            <td class="field"><?php echo esc_html( $emp1Reason ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">&nbsp;</td>
        </tr>
    </table>
    <hr class="dotted">
    <table autosize="1">
        <tr class="row">
            <td class="label" width="2%">2)</td>
            <td class="label" width="5.5%">Employer:</td>
            <td class="field" width="40%"><?php echo esc_html( $emp2 ); ?>&nbsp;</td>
            <td class="label" width="5.5%" style="padding-left:5.5%;text-align:right;">Dates:</td>
            <td class="field" width="11%"><?php echo esc_html( $emp2DtFrom ); ?>&nbsp;</td>
            <td class="label" width="2.5%">to</td>
            <td class="field" width="11%"><?php echo esc_html( $emp2DtTo ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="7%">Address:</td>
            <td class="field" width="46%"><?php echo esc_html( $emp2AddrSt1 . ' ' . $emp2AddrSt2 ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:5%;text-align:right;">Supervisor:</td>
            <td class="field"><?php echo esc_html( $emp2Super ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="16%">City, State, Zip code:</td>
            <td class="field" width="37%"><?php echo esc_html( $emp2AddrCity . ', ' . $emp2AddrState . ' ' . $emp2AddrZip ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:4.5%;text-align:right;">Telephone:</td>
            <td class="field"><?php echo esc_html( $emp2Tel ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">Were you subject to the Federal Motor Carrier Safety Regulations during this period?</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp2FMCSR == "Yes" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">Yes</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp2FMCSR == "No" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">No</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">Were you subject to 49 CFR part 40 controlled substance and alcohol testing during this period?</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp2CFR == "Yes" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">Yes</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp2CFR == "No" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">No</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="15.5%">Reason for Leaving:</td>
            <td class="field"><?php echo esc_html( $emp2Reason ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">&nbsp;</td>
        </tr>
    </table>
    <hr class="dotted">
    <table autosize="1">
        <tr class="row">
            <td class="label" width="2%">3)</td>
            <td class="label" width="5.5%">Employer:</td>
            <td class="field" width="40%"><?php echo esc_html( $emp3 ); ?>&nbsp;</td>
            <td class="label" width="5.5%" style="padding-left:5.5%;text-align:right;">Dates:</td>
            <td class="field" width="11%"><?php echo esc_html( $emp3DtFrom ); ?>&nbsp;</td>
            <td class="label" width="2.5%">to</td>
            <td class="field" width="11%"><?php echo esc_html( $emp3DtTo ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="7%">Address:</td>
            <td class="field" width="46%"><?php echo esc_html( $emp3AddrSt1 . ' ' . $emp3AddrSt2 ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:5%;text-align:right;">Supervisor:</td>
            <td class="field"><?php echo esc_html( $emp3Super ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="16%">City, State, Zip code:</td>
            <td class="field" width="37%"><?php echo esc_html( $emp3AddrCity . ', ' . $emp3AddrState . ' ' . $emp3AddrZip ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:4.5%;text-align:right;">Telephone:</td>
            <td class="field"><?php echo esc_html( $emp3Tel ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">Were you subject to the Federal Motor Carrier Safety Regulations during this period?</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp3FMCSR == "Yes" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">Yes</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp3FMCSR == "No" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">No</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">Were you subject to 49 CFR part 40 controlled substance and alcohol testing during this period?</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp3CFR == "Yes" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">Yes</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp3CFR == "No" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">No</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="15.5%">Reason for Leaving:</td>
            <td class="field"><?php echo esc_html( $emp3Reason ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">&nbsp;</td>
        </tr>
    </table>
    <hr class="dotted">
    <table autosize="1">
        <tr class="row">
            <td class="label" width="2%">4)</td>
            <td class="label" width="5.5%">Employer:</td>
            <td class="field" width="40%"><?php echo esc_html( $emp4 ); ?>&nbsp;</td>
            <td class="label" width="5.5%" style="padding-left:5.5%;text-align:right;">Dates:</td>
            <td class="field" width="11%"><?php echo esc_html( $emp4DtFrom ); ?>&nbsp;</td>
            <td class="label" width="2.5%">to</td>
            <td class="field" width="11%"><?php echo esc_html( $emp4DtTo ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="7%">Address:</td>
            <td class="field" width="46%"><?php echo esc_html( $emp4AddrSt1 . ' ' . $emp4AddrSt2 ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:5%;text-align:right;">Supervisor:</td>
            <td class="field"><?php echo esc_html( $emp4Super ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="16%">City, State, Zip code:</td>
            <td class="field" width="37%"><?php echo esc_html( $emp4AddrCity . ', ' . $emp4AddrState . ' ' . $emp4AddrZip ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:4.5%;text-align:right;">Telephone:</td>
            <td class="field"><?php echo esc_html( $emp4Tel ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">Were you subject to the Federal Motor Carrier Safety Regulations during this period?</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp4FMCSR == "Yes" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">Yes</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp4FMCSR == "No" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">No</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">Were you subject to 49 CFR part 40 controlled substance and alcohol testing during this period?</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp4CFR == "Yes" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">Yes</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp4CFR == "No" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">No</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="15.5%">Reason for Leaving:</td>
            <td class="field"><?php echo esc_html( $emp4Reason ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">&nbsp;</td>
        </tr>
    </table>
    <hr class="dotted">
    <table autosize="1">
        <tr class="row">
            <td class="label" width="2%">5)</td>
            <td class="label" width="5.5%">Employer:</td>
            <td class="field" width="40%"><?php echo esc_html( $emp5 ); ?>&nbsp;</td>
            <td class="label" width="5.5%" style="padding-left:5.5%;text-align:right;">Dates:</td>
            <td class="field" width="11%"><?php echo esc_html( $emp5DtFrom ); ?>&nbsp;</td>
            <td class="label" width="2.5%">to</td>
            <td class="field" width="11%"><?php echo esc_html( $emp5DtTo ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="7%">Address:</td>
            <td class="field" width="46%"><?php echo esc_html( $emp5AddrSt1 . ' ' . $emp5AddrSt2 ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:5%;text-align:right;">Supervisor:</td>
            <td class="field"><?php echo esc_html( $emp5Super ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="16%">City, State, Zip code:</td>
            <td class="field" width="37%"><?php echo esc_html( $emp5AddrCity . ', ' . $emp5AddrState . ' ' . $emp5AddrZip ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:4.5%;text-align:right;">Telephone:</td>
            <td class="field"><?php echo esc_html( $emp5Tel ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">Were you subject to the Federal Motor Carrier Safety Regulations during this period?</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp5FMCSR == "Yes" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">Yes</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp5FMCSR == "No" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">No</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">Were you subject to 49 CFR part 40 controlled substance and alcohol testing during this period?</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp5CFR == "Yes" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">Yes</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp5CFR == "No" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">No</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="15.5%">Reason for Leaving:</td>
            <td class="field"><?php echo esc_html( $emp5Reason ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">&nbsp;</td>
        </tr>
    </table>
    <hr class="dotted">
    <table autosize="1">
        <tr class="row">
            <td class="label" width="2%">6)</td>
            <td class="label" width="5.5%">Employer:</td>
            <td class="field" width="40%"><?php echo esc_html( $emp6 ); ?>&nbsp;</td>
            <td class="label" width="5.5%" style="padding-left:5.5%;text-align:right;">Dates:</td>
            <td class="field" width="11%"><?php echo esc_html( $emp6DtFrom ); ?>&nbsp;</td>
            <td class="label" width="2.5%">to</td>
            <td class="field" width="11%"><?php echo esc_html( $emp6DtTo ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="7%">Address:</td>
            <td class="field" width="46%"><?php echo esc_html( $emp6AddrSt1 . ' ' . $emp6AddrSt2 ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:5%;text-align:right;">Supervisor:</td>
            <td class="field"><?php echo esc_html( $emp6Super ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="16%">City, State, Zip code:</td>
            <td class="field" width="37%"><?php echo esc_html( $emp6AddrCity . ', ' . $emp6AddrState . ' ' . $emp6AddrZip ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:4.5%;text-align:right;">Telephone:</td>
            <td class="field"><?php echo esc_html( $emp6Tel ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">Were you subject to the Federal Motor Carrier Safety Regulations during this period?</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp6FMCSR == "Yes" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">Yes</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp6FMCSR == "No" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">No</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">Were you subject to 49 CFR part 40 controlled substance and alcohol testing during this period?</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp6CFR == "Yes" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">Yes</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp6CFR == "No" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">No</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="15.5%">Reason for Leaving:</td>
            <td class="field"><?php echo esc_html( $emp6Reason ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">&nbsp;</td>
        </tr>
    </table>
    <hr class="dotted">
    <table autosize="1">
        <tr class="row">
            <td class="label" width="2%">7)</td>
            <td class="label" width="5.5%">Employer:</td>
            <td class="field" width="40%"><?php echo esc_html( $emp7 ); ?>&nbsp;</td>
            <td class="label" width="5.5%" style="padding-left:5.5%;text-align:right;">Dates:</td>
            <td class="field" width="11%"><?php echo esc_html( $emp7DtFrom ); ?>&nbsp;</td>
            <td class="label" width="2.5%">to</td>
            <td class="field" width="11%"><?php echo esc_html( $emp7DtTo ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="7%">Address:</td>
            <td class="field" width="46%"><?php echo esc_html( $emp7AddrSt1 . ' ' . $emp7AddrSt2 ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:5%;text-align:right;">Supervisor:</td>
            <td class="field"><?php echo esc_html( $emp7Super ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="3%"></td>
            <td class="label" width="16%">City, State, Zip code:</td>
            <td class="field" width="37%"><?php echo esc_html( $emp7AddrCity . ', ' . $emp7AddrState . ' ' . $emp7AddrZip ); ?>&nbsp;</td>
            <td class="label" width="15%" style="padding-left:4.5%;text-align:right;">Telephone:</td>
            <td class="field"><?php echo esc_html( $emp7Tel ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">Were you subject to the Federal Motor Carrier Safety Regulations during this period?</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp7FMCSR == "Yes" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">Yes</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp7FMCSR == "No" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">No</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">Were you subject to 49 CFR part 40 controlled substance and alcohol testing during this period?</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp7CFR == "Yes" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">Yes</td>
            <td class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $emp7CFR == "No" ) { echo "checked=checked"; } ?> />&nbsp;</td>
            <td class="label" width="4%">No</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="15.5%">Reason for Leaving:</td>
            <td class="field"><?php echo esc_html( $emp7Reason ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">&nbsp;</td>
        </tr>
    </table>
    <hr class="dotted">
    <p class="section-title-sub-u" style="text-align: center;">Use backside of sheet for additional employers</p>
    <hr class="thick">
    <h2 class="section-title">For driver applicants of commercial motor vehicles that require a Commercial Driver License (CDL) the applicant must disclose their controlled substance and alcohol status per the requirements of 49 CFR part 40.25(j).</h2>
    <hr class="thick">
    <p>As a prospective driver employee, you have the right to review information provided by previous employers. You have the right to have errors in the information corrected by the previous employer(s) and for that previous employer(s) to re-send the corrected information to the prospective employer; the right to have a rebuttal statement attached to the alleged erroneous information, if the previous employer and the driver cannot agree on the accuracy of the information.</p>
    <p>Driver employees who have previous Department of Transportation regulated employment history in the preceding three years, and wish to review previous employer provided investigative information, must submit a written request to the prospective employer, which may be done at anytime, including when applying or as late as thirty (30) days after being employed or being notified of denial of employment.  The prospective employer must provide this information to the applicant within five (5) business days of receiving the written request. If the prospective employer has not yet received the requested information from the previous employer(s), then the five (5) business day deadlines will begin when the prospective employer receives the requested safety performance history information. If the driver has not arranged to pick up or receive the requested records within thirty (30) days of the prospective employer making them available, the prospective motor carrier may consider the driver to have waived their request to review the records.</p>
    <hr class="thick">
    <h2 class="section-title">Certification</h2>
    <h2>"I certify that this application was completed by me, and that all entries on it and information in it are true and complete to the best of my knowledge."</h2>
    <table autosize="1">
        <tr class="row">
            <td class="field" style="background-color: #FFD222;text-align:center;">
                <?php 
                    //echo esc_html( $signature );
                    /* Output signature if it exists (this prevents a red X showing up in the PDF when the image doesn't exist) */
                    if ( is_file( $signature ) ) {
                        echo '<img src="' . esc_attr( $signature ) . '" width="150" />'; /* best to use the path to reference the image and check it exists on the server first */
                    } 
                ?>&nbsp;
            </td>
            <td class="field" style="text-align:center;"><?php echo esc_html( $signDate ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label-sub" style="text-align:center;">Applicant's Signature:</td>
            <td class="label-sub" style="text-align:center;">Date Signed:</td>
        </tr>
    </table>
    <hr class="thick">
    <p class="section-title-sub-b">TO BE COMPLETED BY THE EMPLOYER:</p>
    <table autosize="1">
        <tr class="row">
            <td class="label section-title-sub-b" style="width: 50%;">Application received by:</td>
            <td class="label section-title-sub-b" style="width: 50%;">Application reviewed for completeness by:</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="50%" style="padding-right:10px;">&nbsp;</td>
            <td class="field" width="50%">&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label-sub" style="text-align:left;">Name</td>
            <td class="label-sub" style="text-align:left;">Name</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="25%">&nbsp;</td>
            <td class="field" width="25%">&nbsp;</td>
            <td class="field" width="25%">&nbsp;</td>
            <td class="field" width="25%">&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label-sub" style="text-align:left;">Title</td>
            <td class="label-sub" style="text-align:left;">Date</td>
            <td class="label-sub" style="text-align:left;">Title</td>
            <td class="label-sub" style="text-align:left;">Date</td>
        </tr>
    </table>
    <hr class="thick">
    <p class="section-title-sub-b">SIGNIFICANT DATES:</p>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="70%" style="padding-left:20%">Date of Hire:</td>
            <td class="field" width="40%">&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label" style="padding-left:20%">Time & Date of Pre-Employment CST:</td>
            <td class="field">&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label" style="padding-left:20%">Time & Date of Pre-Employment CST Results Received:</td>
            <td class="field">&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label" style="padding-left:20%">Date First Used in Safety Sensitive Position:</td>
            <td class="field">&nbsp;</td>
        </tr>
        <tr class="row">
            <td class="label" style="padding-left:20%">Date of Termination:</td>
            <td class="field">&nbsp;</td>
        </tr>
    </table>
</body>
</html>
