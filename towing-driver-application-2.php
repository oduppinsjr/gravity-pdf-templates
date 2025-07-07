
<?php

/**
 * Template Name: Driver Application
 * Version: 1.0
 * Description: A custom job application template for Wrecker Service.
 * Author: Duppins Technology
 * Author URI: https://duppinstech.com
 * Group: Wrecker
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

$position = $form_data['field'][14] ?? '';
$firstName = $form_data['field'][16]['first'] ?? '';
$middleName = $form_data['field'][16]['middle'] ?? '';
$lastName = $form_data['field'][16]['last'] ?? '';
$fullName = $firstName;
if ( $middleName != '' ) {
    $fullName = $fullName . ' ' . $middleName;
}
$fullName = $fullName . ' ' . $lastName;
$maidenName = $form_data['field'][244] ?? '';
$ssn = $form_data['field'][18] ?? '';
$gender = $form_data['field'][246] ?? '';
$race = $form_data['field'][247] ?? '';
$email = $form_data['field'][243] ?? '';

$AddrSt1 = $form_data['field'][20]['street'] ?? '';
$AddrSt2 = $form_data['field'][20]['street2'] ?? '';
$AddrCty = $form_data['field'][20]['city'] ?? '';
$AddrState = $form_data['field'][20]['state'] ?? '';
$AddrZip = $form_data['field'][20]['zip'] ?? '';
$AddrPhone = $form_data['field'][148] ?? '';
$AddrYrs = $form_data['field'][149] ?? '';

$prevAddr1 = $form_data['field'][19][0]['Street'] ?? '';
$prevAddr1City = $form_data['field'][19][0]['City'] ?? '';
$prevAddr1StateZip = $form_data['field'][19][0]['State & Zip Code'] ?? '';
$prevAddr1Yrs = $form_data['field'][19][0]['How Long? (yr./mo.)'] ?? '';

$legal = $form_data['field'][21] ?? '';
$dob = $form_data['field'][29] ?? '';
$age = $form_data['field'][30] ?? '';
$worked = $form_data['field'][31] ?? '';
$workedWhere = $form_data['field'][32] ?? '';
$workedFrom = $form_data['field'][33] ?? '';
$workedTo = $form_data['field'][34] ?? '';
$workedRate = $form_data['field'][35] ?? '';
$workedPos = $form_data['field'][36] ?? '';
$reason = $form_data['field'][36] ?? '';
$employed = $form_data['field'][38] ?? '';
$leaving = $form_data['field'][39] ?? '';
$referred = $form_data['field'][40] ?? '';
$rate = $form_data['field'][41] ?? '';
$bond = $form_data['field'][43] ?? '';
$bondCo = $form_data['field'][42] ?? '';
$unable = $form_data['field'][44] ?? '';
$explain = $form_data['field'][147] ?? '';

$emp1Name = $form_data['field'][50] ?? '';
$emp1DtFrom = $form_data['field'][59] ?? '';
$emp1DtTo = $form_data['field'][60] ?? '';
$emp1AddrSt1 = $form_data['field'][194]['street'] ?? '';
$emp1AddrSt2 = $form_data['field'][194]['street2'] ?? '';
$emp1AddrStreet .= $emp1AddrSt1;
if ( !empty($emp1AddrSt2) ) {
    $emp1AddrSteet .= ', ' . $emp1AddrSt2;
}
$emp1AddrCity = $form_data['field'][194]['city'] ?? '';
$emp1AddrState = $form_data['field'][194]['state'] ?? '';
$emp1AddrZip = $form_data['field'][194]['zip'] ?? '';
$emp1Position = $form_data['field'][58] ?? '';
$emp1Salary = $form_data['field'][61] ?? '';
$emp1Contact = $form_data['field'][55] ?? '';
$emp1Phone = $form_data['field'][56] ?? '';
$emp1Reason = $form_data['field'][62] ?? '';
$emp1FMCSR = $form_data['field'][63] ?? '';
$emp1Test = $form_data['field'][64] ?? '';

$emp2Name = $form_data['field'][144] ?? '';
$emp2DtFrom = $form_data['field'][145] ?? '';
$emp2DtTo = $form_data['field'][146] ?? '';
$emp2AddrSt1 = $form_data['field'][215]['street'] ?? '';
$emp2AddrSt2 = $form_data['field'][215]['street2'] ?? '';
$emp2AddrStreet .= $emp2AddrSt1;
if ( !empty($emp2AddrSt2) ) {
    $emp2AddrStreet .= ', ' . $emp2AddrSt2;
}
$emp2AddrCity = $form_data['field'][215]['city'] ?? '';
$emp2AddrState = $form_data['field'][215]['state'] ?? '';
$emp2AddrZip = $form_data['field'][215]['zip'] ?? '';
$emp2Position = $form_data['field'][143] ?? '';
$emp2Salary = $form_data['field'][141] ?? '';
$emp2Contact = $form_data['field'][135] ?? '';
$emp2Phone = $form_data['field'][136] ?? '';
$emp2Reason = $form_data['field'][137] ?? '';
$emp2FMCSR = $form_data['field'][134] ?? '';
$emp2Test = $form_data['field'][198] ?? '';

$emp3Name = $form_data['field'][229] ?? '';
$emp3DtFrom = $form_data['field'][234] ?? '';
$emp3DtTo = $form_data['field'][238] ?? '';
$emp3AddrSt1 = $form_data['field'][226]['street'] ?? '';
$emp3AddrSt2 = $form_data['field'][226]['street2'] ?? '';
$emp3AddrStreet .= $emp3AddrSt1;
if ( !empty($emp3AddrSt2) ) {
    $emp3AddrStreet .= ', ' . $emp3AddrSt2;
}
$emp3AddrCity = $form_data['field'][226]['city'] ?? '';
$emp3AddrState = $form_data['field'][226]['state'] ?? '';
$emp3AddrZip = $form_data['field'][226]['zip'] ?? '';
$emp3Position = $form_data['field'][218] ?? '';
$emp3Salary = $form_data['field'][222] ?? '';
$emp3Contact = $form_data['field'][203] ?? '';
$emp3Phone = $form_data['field'][209] ?? '';
$emp3Reason = $form_data['field'][213] ?? '';
$emp3FMCSR = $form_data['field'][200] ?? '';
$emp3Test = $form_data['field'][197] ?? '';

$emp4Name = $form_data['field'][230] ?? '';
$emp4DtFrom = $form_data['field'][233] ?? '';
$emp4DtTo = $form_data['field'][237] ?? '';
$emp4AddrSt1 = $form_data['field'][225]['street'] ?? '';
$emp4AddrSt2 = $form_data['field'][225]['street2'] ?? '';
$emp4AddrStreet .= $emp4AddrSt1;
if ( !empty($emp4AddrSt2) ) {
    $emp4AddrStreet .= ', ' . $emp4AddrSt2;
}
$emp4AddrCity = $form_data['field'][225]['city'] ?? '';
$emp4AddrState = $form_data['field'][225]['state'] ?? '';
$emp4AddrZip = $form_data['field'][225]['zip'] ?? '';
$emp4Position = $form_data['field'][217] ?? '';
$emp4Salary = $form_data['field'][221] ?? '';
$emp4Contact = $form_data['field'][204] ?? '';
$emp4Phone = $form_data['field'][208] ?? '';
$emp4Reason = $form_data['field'][212] ?? '';
$emp4FMCSR = $form_data['field'][202] ?? '';
$emp4Test = $form_data['field'][196] ?? '';

$emp5Name = $form_data['field'][228] ?? '';
$emp5DtFrom = $form_data['field'][232] ?? '';
$emp5DtTo = $form_data['field'][236] ?? '';
$emp5AddrSt1 = $form_data['field'][224]['street'] ?? '';
$emp5AddrSt2 = $form_data['field'][224]['street2'] ?? '';
$emp5AddrStreet .= $emp5AddrSt1;
if ( !empty($emp5AddrSt2) ) {
    $emp5AddrStreet .= ', ' . $emp5AddrSt2;
}
$emp5AddrCity = $form_data['field'][224]['city'] ?? '';
$emp5AddrState = $form_data['field'][224]['state'] ?? '';
$emp5AddrZip = $form_data['field'][224]['zip'] ?? '';
$emp5Position = $form_data['field'][216] ?? '';
$emp5Salary = $form_data['field'][220] ?? '';
$emp5Contact = $form_data['field'][205] ?? '';
$emp5Phone = $form_data['field'][207] ?? '';
$emp5Reason = $form_data['field'][211] ?? '';
$emp5FMCSR = $form_data['field'][201] ?? '';
$emp5Test = $form_data['field'][195] ?? '';

$accident1Dt = $form_data['list'][66][0]['Date'] ?? '';
$accident1Nature = $form_data['list'][66][0]['Nature of Accident'] ?? '';
$accident1Fatality = $form_data['list'][66][0]['Fatalities'] ?? '';
$accident1Injury = $form_data['list'][66][0]['Injuries'] ?? '';
$accident1Spill = $form_data['list'][66][0]['HAZMAT Spill'] ?? '';
$accident2Dt = $form_data['list'][66][1]['Date'] ?? '';
$accident2Nature = $form_data['list'][66][1]['Nature of Accident'] ?? '';
$accident2Fatality = $form_data['list'][66][1]['Fatalities'] ?? '';
$accident2Injury = $form_data['list'][66][1]['Injuries'] ?? '';
$accident2Spill = $form_data['list'][66][1]['HAZMAT Spill'] ?? '';
$accident3Dt = $form_data['list'][66][2]['Date'] ?? '';
$accident3Nature = $form_data['list'][66][2]['Nature of Accident'] ?? '';
$accident3Fatality = $form_data['list'][66][2]['Fatalities'] ?? '';
$accident3Injury = $form_data['list'][66][2]['Injuries'] ?? '';
$accident3Spill = $form_data['list'][66][2]['HAZMAT Spill'] ?? '';

$conviction1Loc = $form_data['list'][68][0]['Location'] ?? '';
$conviction1Dt = $form_data['list'][68][0]['Date'] ?? '';
$conviction1Chg = $form_data['list'][68][0]['Charge'] ?? '';
$conviction1Pen = $form_data['list'][68][0]['Penalty'] ?? '';
$conviction2Loc = $form_data['list'][68][1]['Location'] ?? '';
$conviction2Dt = $form_data['list'][68][1]['Date'] ?? '';
$conviction2Chg = $form_data['list'][68][1]['Charge'] ?? '';
$conviction2Pen = $form_data['list'][68][1]['Penalty'] ?? '';
$conviction3Loc = $form_data['list'][68][2]['Location'] ?? '';
$conviction3Dt = $form_data['list'][68][2]['Date'] ?? '';
$conviction3Chg = $form_data['list'][68][2]['Charge'] ?? '';
$conviction3Pen = $form_data['list'][68][2]['Penalty'] ?? '';

$license1State = $form_data['list'][67][0]['State'] ?? '';
$license1Num = $form_data['list'][67][0]['License No.'] ?? '';
$license1Cls = $form_data['list'][67][0]['Class'] ?? '';
$license1End = $form_data['list'][67][0]['Endorsements'] ?? '';
$license1Exp = $form_data['list'][67][0]['Expiration Date'] ?? '';
$license2State = $form_data['list'][67][1]['State'] ?? '';
$license2Num = $form_data['list'][67][1]['License No.'] ?? '';
$license2Cls = $form_data['list'][67][1]['Class'] ?? '';
$license2End = $form_data['list'][67][1]['Endorsements'] ?? '';
$license2Exp = $form_data['list'][67][1]['Expiration Date'] ?? '';
$license3State = $form_data['list'][67][2]['State'] ?? '';
$license3Num = $form_data['list'][67][2]['License No.'] ?? '';
$license3Cls = $form_data['list'][67][2]['Class'] ?? '';
$license3End = $form_data['list'][67][2]['Endorsements'] ?? '';
$license3Exp = $form_data['list'][67][2]['Expiration Date'] ?? '';

$licenseDenied = $form_data['field'][69] ?? '';
$licenseRevoked = $form_data['field'][70] ?? '';
$licenseDetails = $form_data['field'][71] ?? '';

$straightTruck = $form_data['field'][75] ?? '';
$straightEquip = $form_data['field'][74] ?? '';
$straightDt = $form_data['field'][87] ?? '';
$straightMiles = $form_data['field'][86] ?? '';

$tractorSemi = $form_data['field'][81] ?? '';
$tractorSemiEquip = $form_data['field'][78] ?? '';
$tractorSemiDt = $form_data['field'][88] ?? '';
$tractorSemiMiles = $form_data['field'][92] ?? '';

$tractor2 = $form_data['field'][96] ?? '';
$tractor2Equip = $form_data['field'][97] ?? '';
$tractor2Dt = $form_data['field'][98] ?? '';
$tractor2Miles = $form_data['field'][99] ?? '';

$tractor3 = $form_data['field'][82] ?? '';
$tractor3Equip = $form_data['field'][83] ?? '';
$tractor3Dt = $form_data['field'][88] ?? '';
$tractor3Miles = $form_data['field'][93] ?? '';

$coachBus = $form_data['field'][80] ?? '';
$coachBusEquip = $form_data['field'][77] ?? '';
$coachBusDt = $form_data['field'][90] ?? '';
$coachBusMiles = $form_data['field'][94] ?? '';

$coachBus2 = $form_data['field'][255] ?? '';
$coachBus2Equip = $form_data['field'][256] ?? '';
$coachBus2Dt = $form_data['field'][257] ?? '';
$coachBus2Miles = $form_data['field'][258] ?? '';

$otherTruck = $form_data['field'][79] ?? '';
$otherEquip = $form_data['field'][76] ?? '';
$otherDt = $form_data['field'][91] ?? '';
$otherMiles = $form_data['field'][95] ?? '';

$states = $form_data['field'][100] ?? '';
$courses = $form_data['field'][101] ?? '';
$awards = $form_data['field'][102] ?? '';

$otherExperience = $form_data['field'][104] ?? '';
$othercourses = $form_data['field'][105] ?? '';
$specialEqip = $form_data['field'][106] ?? '';

$highGrade = $form_data['field'][110] ?? '';
$schoolName = $form_data['field'][111] ?? '';

$availDt = $form_data['field'][169] ?? '';
$availDN = $form_data['field'][161] ?? '';

$monFrom = $form_data['field'][163] ?? '';
$monTo = $form_data['field'][167] ?? '';
$tueFrom = $form_data['field'][171] ?? '';
$tueTo = $form_data['field'][178] ?? '';
$wedFrom = $form_data['field'][170] ?? '';
$wedTo = $form_data['field'][180] ?? '';
$thuFrom = $form_data['field'][173] ?? '';
$thuTo = $form_data['field'][177] ?? '';
$friFrom = $form_data['field'][174] ?? '';
$friTo = $form_data['field'][179] ?? '';
$satFrom = $form_data['field'][172] ?? '';
$satTo = $form_data['field'][181] ?? '';
$sunFrom = $form_data['field'][175] ?? '';
$sunTo = $form_data['field'][176] ?? '';

$signature = $form_data['signature_details_id'][254]['path']; /* the full path to the signature */
$signDate = $form_data['field'][115] ?? '';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Driver Application</title>
    <style>
        body {
            font-family: 'Book Antiqua', serif;
            font-size: 13px;
            line-height: 1.5;
            width: 90%;
            margin: auto;
        }
        .section-title, .page-title {
            text-align: center;
            font-weight: bold;
            padding: 0;
            margin: 0;
        }
        .section-title.smaller {
            font-size: 12px;
        }
        .section-title-sub-b {
            font-weight: bold;
            padding: 0;
            margin: 0;
        }
        .section-title-sub-u {
            font-size: 13px;
            text-decoration: underline;
            font-weight: bold;
            padding: 0;
            margin: 0;
        }
        hr.thick {
            margin-bottom: 0;
        }
        .entry {
            font-size: 15px;
        }
        .entry_u {
            font-size: 15px;
            border-bottom: 1px solid black;
        }
        .field {
            border-bottom: 1px solid black;
        }
        .circle {
            border: 1px solid black; /* Creates the border */
            border-radius: 50%;    /* Makes it a circle */
        }
        .box {
            border: 1px solid black;
        }
        .box.inner {
            border-top: none;
        }
        .box.inner-left {
            border-left: 1px solid black;
            border-top: none;
            border-bottom: none;
        }
        .box.inner-top {
            border-left: 1px solid black;
            border-top: 1px solid black;
            border-bottom: none;
        }
        .box.inner-bottom {
            border-left: 1px solid black;
            border-bottom: 1px solid black;
            border-top: none;
        }
        .box.top.inner-col {
            border-top: 1px solid black;
            border-right: none;
        }
        .box.top.inner-row {
            border-top: 1px solid black;
            border-left: none;
            border-right: none;
        }
        .box.inner.inner-col {
            border-right: none;
        }
        .box.top.inner-col.end {
            border-top: 1px solid black;
            border-right: 1px solid black;
        }
        .box.inner.inner-col.end {
            border-right: 1px solid black;
        }
        .box.inner.inner-row {
            border-bottom: 1px solid black;
            border-left: none;
            border-right: none;
        }
        .box.inner.inner-row.end {
            border-right: 1px solid black;
        }
        .label {
            text-align: left;
        }
        .box .label {
            text-align: left;
            font-size: .8em!important;
        }
        .label-sub {
            text-align: left;
            font-size: 11px;
        }
        .smaller {
            font-size: 11px;
        }
        .smallish {
            font-size: 11.5px;
        }
    </style>
</head>
<body>
    <!-- DOT MED CARD -->
    <h1 class="page-title">Wrecker Service, Inc.</h1>
    <table autosize="1">
        <tr class="row">
            <td style="font-size: .8em;text-align:left;">
                123 Street Ave, Somewhere, FL 32222<br />
                Telephone: (444) 444-4444 / Facsimile: (444) 444-4444
            </td>
            <td style="font-size: .8em;text-align: right;">
                123 Road Ave, Elsewhere, FL 32222<br />
                Telephone: (555) 555-5555 / Facsimile: (555) 555-5555
            </td>
        </tr>
    </table>
    <p style="text-align: center;">www.wrecker.com</p>
    <p>
        <b>RE: Medical Examiner's Cetrificate - DOT Med Card</b>
    </p>
    <p>
        Dear Applicant
    </p>
    <p>
        <b>Please read and make sure you understand our driving requirements, <u>before</u> you proceed with completing the application.</b>
    </p>
    <p>
        In accordance with Federal Motor Carrier Safty Regualtions (49 CFR 391.41-391.49) all CDL license 
        holders must obtain and self-certify with SLDA (State Driver's License Agency). We require a copy of
        the currnet DOT medical card to be kept in DOT personnel files.
    </p>
    <p>
        <b>**<u>ALL</u> Commerical Motor Vehicle drivers including non-CDL license holders are required to obtain and carry a medical card.**</b>
    </p>
    <p>
        You will be required to botain a new medical card and/or update an expired card <u>BEFORE</u> beginning
        work. If you have special requirements, exemptions, disabilities and/or need a referral, please discuss it
        at the time of your interview.
    </p>
    <p>Thank you,</p>
    <p>Wrecker Service, Inc.</p>
    <p class="smaller">
        I have read and understand meeker Service, Inc.'s policy regarding medical cards and further agree to obtain and/or update a 
        medical card for myself and keep it updated with the Department of Motor Vehicles.
    </p>
    <br />
    <table autosize="1">
        <tr class="row" width="60%">
            <td class="field"><span class="entry"><?php echo esc_html( $fullName ); ?>&nbsp;</span></td>
            <td>&nbsp;</td>
        </tr>
        <tr class="row" width="60%">
            <td class="label-sub">PRINT Applicant Name</td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row" width="60%">
            <td class="field">
                <?php 
                    //echo esc_html( $signature );
                    /* Output signature if it exists (this prevents a red X showing up in the PDF when the image doesn't exist) */
                    if ( is_file( $signature ) ) {
                        echo '<img src="' . esc_attr( $signature ) . '" width="150" />'; /* best to use the path to reference the image and check it exists on the server first */
                    } 
                ?>
                &nbsp;
            </td>
            <td class="field"><?php echo esc_html( $signDate ); ?>&nbsp;</td>
        </tr>
        <tr class="row" width="60%">
            <td class="label-sub">SIGNATURE Applicant Name</td>
            <td class="label-sub">DATE</td>
        </tr>
    </table>
    <br />
    <br />
    <p class="smaller">
        Wrecker Service, Inc., provides equal employment opportunities (EEO) to all employees and applicants for employment without regard to race, 
        color, religion, gender, sexual orientation, gender identity or expression, national origin, age, disability, genetic information, marital status, amnesty, or 
        status as a covered veteran in accordance with applicable federal, state and local Jaws. Wrecker Service, Inc., complies with applicable state and 
        local laws governing non-discrimination in employment in every location in which the company has facilities. This policy applies to all terms and 
        conditions of employment, including, but not limited to, hiring, placement, promotion, termination, layoff, recall, transfer, leaves of absence, 
        compensation, and training. Wrecker Service, Inc., expressly prohibits any form of unlawful employee harassment based on race, color, 
        religion, gender, sexual orientation, gender identity or expression, national origin, age, genetic information, disability, or veteran status. Improper 
        interference with the ability of Wrecker Service, Inc.'s employees to perform their expected job duties is absolutely not tolerated.
    </p>
    <p style="text-align:right;">Updated 01/21</p>
    <pagebreak/>
    <!-- APPLICATION PAGE 1 -->
    <h1 class="page-title">DRIVER'S APPLICATION<br />FOR EMPLOYMENT</h1>
    <table autosize="1">
        <tr class="row">
            <td width="14%">
                <span class="label">Applicant Name</span>
            </td>
            <td class="field" width="30%">
                <span class="entry"><?php echo esc_html( $fullName ); ?>&nbsp;</span>
            </td>
            <td width="16%">
                <span class="label">Date of Application</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $signDate ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td style="text-align: right;" width="20%">
                <span class="label">Company</span>
            </td>
            <td class="field" style="text-align: center;">
                <span class="entry">Wrecker Service, Inc.</span>
            </td>
            <td width="20%">
                <span class="label">&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td style="text-align: right;" width="20%">
                <span class="label">Address</span>
            </td>
            <td class="field" style="text-align: center;">
                <span class="entry">580 Wilmer Ave.</span>
            </td>
            <td width="20%">
                <span class="label">&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td style="text-align: right;" width="20%">
                <span class="label">City</span>
            </td>
            <td class="field" style="text-align: center;">
                <span class="entry">Orlando</span>
            </td>
            <td style="text-align: right;" width="5.5%">
                <span class="label">State</span>
            </td>
            <td class="field" style="text-align: center;">
                <span class="entry">FL</span>
            </td>
            <td style="text-align: right;" width="3%">
                <span class="label">Zip</span>
            </td>
            <td class="field" style="text-align: center;">
                <span class="entry">32808</span>
            </td>
            <td width="20%">
                <span class="label">&nbsp;</span>
            </td>
        </tr>
    </table>
    <p style="text-align:center;">
        In compliance with Federal and State equal employment opportunity laws, qualified applicants <br />
        are considered for all positions without regard to race, color, religion, sex, national origin, age, <br />
        marital status, veteran status, non-job related disability, or any other protected group status.<br />
    </p>
    <div style="border:1px solid black;padding:1%;">
        <h4 class="section-title" style="padding:0;margin:0;">TO BE READ AND SIGNED BY APPLICANT</h4>
        <p style="padding:0;margin:0;">
            I authorize you to make such investigations and inquiries of my personal, employment, financial or medical history 
            and other related matters as may be necessary in arriving at an employment decision. (Generally, inquiries 
            regarding medical history will be made only if and after a conditional offer of employment has been extended.) 
            I hereby release employers, schools, health care providers and other persons from all liability in responding to 
            inquiries and releasing information in connection with my application.
        </p>
        <p style="padding:0;margin:0;">
            In the event of employment, I understand that false or misleading information given in my application or inter­-
            view(s) may result in discharge. I understand, also, that I am required to abide by alt rules and regulations of 
            the Company.
        </p>
        <p style="padding:0;margin:0;">
            I understand that information I provide regarding current and/or previous employers may be used, and those 
            employer(s) will be contacted, for the purpose of investigating my safety performance history as required by 49 
            CFR 391.23(d) and (e). I understand that I have the right to:
        </p>
            <ul>
                <li>Review information provided by previous employers;</li>
                <li>Have errors in the information corrected by previous employers and for those previous employer(s) to re-send 
                    the corrected information to the prospective employer; and</li>
                <li>Have a rebuttal statement attached to the alleged erroneous information, if  he previous employer(s) and I
                cannot agree on the accuracy of the information.</li>
            </ul>
        <table autosize="1">
            <tr class="row">
                <td class="label" width="9%">Signature</td>
                <td class="field">
                    <?php 
                        //echo esc_html( $fullName );
                        /* Output signature if it exists (this prevents a red X showing up in the PDF when the image doesn't exist) */
                        if ( is_file( $signature ) ) {
                            echo '<img src="' . esc_attr( $signature ) . '" width="150" />'; /* best to use the path to reference the image and check it exists on the server first */
                        } 
                    ?>&nbsp;
                </td>
                <td class="label" width="5.5%">Date</td>
                <td class="field"><span class="entry"><?php echo esc_html( $signDate ); ?>&nbsp;</span></td>
            </tr>
        </table>
    </div>
    <h3 class="section-title">FOR COMPANY USE</h3>
    <div style="border:1px solid black;padding:1%;">
        <h4 class="section-title" style="padding:0;margin:0;">PROCESS RECORD</h4>
        <table autosize="1">
            <tr class="row">
                <td class="label" width="16%">APPLICANT HIRED</td>
                <td class="field" width="34%">&nbsp;</td>
                <td class="label" width="9%">REJECTED</td>
                <td class="field" width="41%">&nbsp;</td>
            </tr>
        </table>
        <table autosize="1">
            <tr class="row">
                <td class="label" width="15%">DATE EMPLOYED</td>
                <td class="field" width="35%">&nbsp;</td>
                <td class="label" width="16%">POINT EMPLOYED</td>
                <td class="field" width="34%">&nbsp;</td>
            </tr>
        </table>
        <table autosize="1">
            <tr class="row">
                <td class="label" width="12%">DEPARTMENT</td>
                <td class="field" width="38%">&nbsp;</td>
                <td class="label" width="15%">CLASSIFICATION</td>
                <td class="field" width="35%">&nbsp;</td>
            </tr>
        </table>
        <table autosize="1">
            <tr class="row">
                <td class="label" style="font-size:10px;" width="50%">(IF REJECTED. SUMMARY REPORT OF REASONS SHOULD BE PLACED IN FILE)</td>
                <td class="label" width="50%">&nbsp;</td>
            </tr>
        </table>
        <table autosize="1">
            <tr class="row">
                <td class="label" width="34%">SIGNATURE OF INTERVIEWING OFFICER</td>
                <td class="field">&nbsp;</td>
            </tr>
        </table>
    </div>
    <h4 class="section-title">TERMINATION OF EMPLOYMENT</h4>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="16%">DATE TERMINATED</td>
            <td class="field">&nbsp;</td>
            <td class="label" width="26%">DEPARTMENT RELEASED FROM</td>
            <td class="field">&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="10%">DISMISSED </td>
            <td class="field">&nbsp;</td>
            <td class="label" width="17%">VOLUNTARILY QUIT</td>
            <td class="field">&nbsp;</td>
            <td class="label" width="6%">OTHER</td>
            <td class="field">&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="33%">TERMINATION REPORT PLACED IN FILE</td>
            <td class="field">&nbsp;</td>
            <td class="label" width="11%">SUPERVISOR</td>
            <td class="field">&nbsp;</td>
        </tr>
    </table>
    <div style="border:1px solid black;padding:.5%;">
        <p class="smaller" style="padding:0;margin:0;">
            This form is made available with the understanding thal J. J. Keller & Associates, Inc.® is not engaged in rendering legal. accounting, or other professional services.
            J. J. Keller & Associates, lnc.•D assumes no responsibility for the use of this form, or any decision made by an employer which may violate locul. state. or federal law.
        </p>
    </div>
    <pagebreak/>
    <!-- APPLICATION PAGE 2 -->
    <h3 class="page-title">APPLICANT TO COMPLETE</h3>
    <p style="text-align:center;padding:0;margin:0;">(answer all questions - please print)</p>
    <table autosize="1">
        <tr class="row">
            <td width="19%">
                <span class="label">Position(s) Applied for</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $position ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="6%">
                <span class="label">Name</span>
            </td>
            <td class="field" width="24%">
                <span class="entry"><?php echo esc_html( $lastName ); ?>&nbsp;</span>
            </td>
            <td class="field" width="20%">
                <span class="entry"><?php echo esc_html( $firstName ); ?>&nbsp;</span>
            </td>
            <td class="field" width="20%">
                <span class="entry"><?php echo esc_html( $middleName ); ?>&nbsp;</span>
            </td>
            <td width="16%">
                <span class="label">Social Security No.</span>
            </td>
            <td class="field" width="14%">
                <span class="entry"><?php echo esc_html( $ssn ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td>&nbsp;</td>
            <td>
                <span class="label-sub">Last</span>
            </td>
            <td>
                <span class="label-sub">First</span>
            </td>
            <td>
                <span class="label-sub">Middle</span>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <p>List your addresses of residency for the past 3 years.</p>
    <table autosize="1">
        <tr class="row">
        <tr class="row">
            <td width="14%">
                <span class="label">Current Address</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $AddrSt1 ); ?>&nbsp;</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $AddrCty ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td>&nbsp;</td>
            <td>
                <span class="label-sub">Street</span>
            </td>
            <td>
                <span class="label-sub">City</span>
            </td>
        </tr>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="14%">
            </td>
            <td class="field" width="35%">
                <span class="entry"><?php echo esc_html( $AddrState ); ?>&nbsp;</span>
            </td>
            <td class="field" width="10%">
                <span class="entry"><?php echo esc_html( $AddrZip ); ?>&nbsp;</span>
            </td>
            <td>
                <span class="label" width="6%">Phone</span>
            </td>
            <td class="field" width="18%">
                <span class="entry"><?php echo esc_html( $AddrPhone ); ?>&nbsp;</span>
            </td>
            <td>
                <span class="label" width="10%">How Long?</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $AddrYrs ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td>&nbsp;</td>
            <td>
                <span class="label-sub">State</span>
            </td>
            <td>
                <span class="label-sub">Zip Code</span>
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><span class="label-sub">yr./mo.</span></td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="14%">
            </td>
            <td class="field" width="35%">
                <span class="entry"><?php echo esc_html( $prevAddr1 ); ?>&nbsp;</span>
            </td>
            <td class="field" width="15%">
                <span class="entry"><?php echo esc_html( $prevAddr1City ); ?>&nbsp;</span>
            </td>
            <td class="field" width="20%">
                <span class="entry"><?php echo esc_html( $prevAddr1StateZip ); ?>&nbsp;</span>
            </td>
            <td>
                <span class="label" width="10%">How Long?</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $prevAddr1Yrs ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td>&nbsp;</td>
            <td>
                <span class="label-sub">Street</span>
            </td>
            <td>
                <span class="label-sub">City</span>
            </td>
            <td><span class="label-sub">State & Zip Code</span></td>
            <td>&nbsp;</td>
            <td><span class="label-sub">yr./mo.</span></td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="14%">
            </td>
            <td class="field" width="35%">
                <span class="entry"><?php echo esc_html( $prevAddr2 ); ?>&nbsp;</span>
            </td>
            <td class="field" width="15%">
                <span class="entry"><?php echo esc_html( $prevAddr2City ); ?>&nbsp;</span>
            </td>
            <td class="field" width="20%">
                <span class="entry"><?php echo esc_html( $prevAddr2StateZip ); ?>&nbsp;</span>
            </td>
            <td>
                <span class="label" width="10%">How Long?</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $prevAddr2Yrs ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td>&nbsp;</td>
            <td>
                <span class="label-sub">Street</span>
            </td>
            <td>
                <span class="label-sub">City</span>
            </td>
            <td><span class="label-sub">State & Zip Code</span></td>
            <td>&nbsp;</td>
            <td><span class="label-sub">yr./mo.</span></td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="14%">
            </td>
            <td class="field" width="35%">
                <span class="entry"><?php echo esc_html( $prevAddr3 ); ?>&nbsp;</span>
            </td>
            <td class="field" width="15%">
                <span class="entry"><?php echo esc_html( $prevAddr3City ); ?>&nbsp;</span>
            </td>
            <td class="field" width="20%">
                <span class="entry"><?php echo esc_html( $prevAddr3StateZip ); ?>&nbsp;</span>
            </td>
            <td>
                <span class="label" width="10%">How Long?</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $prevAddr3Yrs ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td>&nbsp;</td>
            <td>
                <span class="label-sub">Street</span>
            </td>
            <td>
                <span class="label-sub">City</span>
            </td>
            <td><span class="label-sub">State & Zip Code</span></td>
            <td>&nbsp;</td>
            <td><span class="label-sub">yr./mo.</span></td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="48%">
                <span class="label">Do you have the legal right to work in the United States?</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $legal ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="11%">
                <span class="label">Date of Birth</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $dob ); ?>&nbsp;</span>
            </td>
            <td width="25%">
                <span class="label">Can you provide proof of age? </span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $age ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="50%">
                <span class="label smaller">(Required for Commercial Drivers)</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="36%">
                <span class="label">Have you worked for this company before?</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $worked ); ?>&nbsp;</span>
            </td>
            <td width="6%">
                <span class="label">Where</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $workedWhere ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="6%">
                <span class="label">Dates:</span>
            </td>
            <td width="65.5">
                <span class="label">From</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $workedFrom ); ?>&nbsp;</span>
            </td>
            <td width="3%">
                <span class="label">To</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $workedTo ); ?>&nbsp;</span>
            </td>
            <td width="10%">
                <span class="label">Rate of Pay</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $workedRate ); ?>&nbsp;</span>
            </td>
            <td width="7%">
                <span class="label">Position</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $workedPos ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="22%">
                <span class="label">Are you now employed?</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $employed ); ?>&nbsp;</span>
            </td>
            <td width="40%">
                <span class="label">If not, how long since leaving last employment?</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $howLong ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="16%">
                <span class="label">Who referred you?</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $referred ); ?>&nbsp;</span>
            </td>
            <td width="18%">
                <span class="label">Rate of pay expected</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $rate ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="25%">
                <span class="label">Have you ever been bonded?</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $bond ); ?>&nbsp;</span>
            </td>
            <td width="23%">
                <span class="label">Name of bonding company</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $bondCo ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td>
                <span class="label">Is there any reason you might be unable to perform the functions of the job for which you have applied [as described in the attached job description]?</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="entry"><?php echo esc_html( $unable ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td>
                <span class="label">If yes, explain if you wish.</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="entry"><?php echo esc_html( $explain ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="entry">&nbsp;</span>
            </td>
        </tr>
    </table>
    <br />
    <!-- EMPLOYMENT HISTORY -->
    <h3 class="section-title">EMPLOYMENT HISTORY</h3>
    <p style="margin:0;padding:0;">
        All driver applicants to drive in interstate commerce must provide the following information on all employers during the prec.eding 3 years. List complete mailing address, street number, city, state and zip code.
    </p>
    <p style="margin:0;padding:0;">
        Applicants to drive a commercial motor vehicle* in intrastate or interstate commerce shall also provide an addi­tional 7 years' information on those employers for whom the applicant operated such vehicle.
        (NOTE: List employers in reverse order starting with the most recent. Add another sheet as necessary.)
    </p>
    <table autosize="1">
        <tr class="row">
            <td class="box inner-col" style="text-align: center;" width="70%">
                <span class="label">Employer</span>
            </td>
            <td class="box" style="text-align: center;">
                <span class="label">Date</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">Name</span>
                <span class="entry"><?php echo esc_html( $emp1Name ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="15%">
                <span class="label">From</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp1DtFrom ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="15%">
                <span class="label">To</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp1DtTo ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">Address</span>
                <span class="entry"><?php echo esc_html( $emp1AddrStreet ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="30%">
                <span class="label">Position Held</span>
                <span class="entry"><?php echo esc_html( $emp1Position ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">City</span>
                <span class="entry"><?php echo esc_html( $emp1AddrCity ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="border-left:none;">
                <span class="label">State</span>
                <span class="entry"><?php echo esc_html( $emp1AddrState ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="border-left:none;">
                <span class="label">Zip</span>
                <span class="entry"><?php echo esc_html( $emp1AddrZip ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="30%">
                <span class="label">Salary/Wage</span>
                <span class="entry"><?php echo esc_html( $emp1Salary ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner">
                <span class="label">WERE YOU SUBJECT TO THE FMCSRs+ WHILE EMPLOYED?</span>
                <input type="checkbox" <?php if ( $emp1FMCSR == "Yes" ) { echo "checked=checked"; } ?>/>Yes
                <input type="checkbox" <?php if ( $emp1FMCSR == "No" ) { echo "checked=checked"; } ?>/>No
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner">
                <span class="label">WAS YOUR JOB DESIGNATED AS A SAFETY-SENSITIVE FUNCTION IN ANY DOT-REGULATED MODE SUBJECT TO THE DRUG AND ALCOHOL TESTING REQUIREMENTS OF 49 CFR PART 40?</span>
                <input type="checkbox" <?php if ( $emp1Test == "Yes" ) { echo "checked=checked"; } ?>/>Yes
                <input type="checkbox" <?php if ( $emp1Test == "No" ) { echo "checked=checked"; } ?>/>No
            </td>
        </tr>
    </table>
    <br />
    <h3 class="section-title">EMPLOYMENT HISTORY (continued)</h3>
    <table autosize="1">
        <tr class="row">
            <td class="box inner-col" style="text-align: center;" width="70%">
                <span class="label">Employer</span>
            </td>
            <td class="box" style="text-align: center;">
                <span class="label">Date</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">Name</span>
                <span class="entry"><?php echo esc_html( $emp2Name ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="15%">
                <span class="label">From</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp2DtFrom ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="15%">
                <span class="label">To</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp2DtTo ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">Address</span>
                <span class="entry"><?php echo esc_html( $emp2AddrStreet ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="30%">
                <span class="label">Position Held</span>
                <span class="entry"><?php echo esc_html( $emp2Position ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">City</span>
                <span class="entry"><?php echo esc_html( $emp2AddrCity ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="border-left:none;">
                <span class="label">State</span>
                <span class="entry"><?php echo esc_html( $emp2AddrState ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="border-left:none;">
                <span class="label">Zip</span>
                <span class="entry"><?php echo esc_html( $emp2AddrZip ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="30%">
                <span class="label">Salary/Wage</span>
                <span class="entry"><?php echo esc_html( $emp2Salary ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner">
                <span class="label">WERE YOU SUBJECT TO THE FMCSRs+ WHILE EMPLOYED?</span>
                <input type="checkbox" <?php if ( $emp2FMCSR == "Yes" ) { echo "checked=checked"; } ?>/>Yes
                <input type="checkbox" <?php if ( $emp2FMCSR == "No" ) { echo "checked=checked"; } ?>/>No
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner">
                <span class="label">WAS YOUR JOB DESIGNATED AS A SAFETY-SENSITIVE FUNCTION IN ANY DOT-REGULATED MODE SUBJECT TO THE DRUG AND ALCOHOL TESTING REQUIREMENTS OF 49 CFR PART 40?</span>
                <input type="checkbox" <?php if ( $emp2Test == "Yes" ) { echo "checked=checked"; } ?>/>Yes
                <input type="checkbox" <?php if ( $emp2Test == "No" ) { echo "checked=checked"; } ?>/>No
            </td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="box inner-col" style="text-align: center;" width="70%">
                <span class="label">Employer</span>
            </td>
            <td class="box" style="text-align: center;">
                <span class="label">Date</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">Name</span>
                <span class="entry"><?php echo esc_html( $emp3Name ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="15%">
                <span class="label">From</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp3DtFrom ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="15%">
                <span class="label">To</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp3DtTo ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">Address</span>
                <span class="entry"><?php echo esc_html( $emp3AddrStreet ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="30%">
                <span class="label">Position Held</span>
                <span class="entry"><?php echo esc_html( $emp3Position ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">City</span>
                <span class="entry"><?php echo esc_html( $emp3AddrCity ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="border-left:none;">
                <span class="label">State</span>
                <span class="entry"><?php echo esc_html( $emp3AddrState ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="border-left:none;">
                <span class="label">Zip</span>
                <span class="entry"><?php echo esc_html( $emp3AddrZip ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="30%">
                <span class="label">Salary/Wage</span>
                <span class="entry"><?php echo esc_html( $emp3Salary ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner">
                <span class="label">WERE YOU SUBJECT TO THE FMCSRs+ WHILE EMPLOYED?</span>
                <input type="checkbox" <?php if ( $emp3FMCSR == "Yes" ) { echo "checked=checked"; } ?>/>Yes
                <input type="checkbox" <?php if ( $emp3FMCSR == "No" ) { echo "checked=checked"; } ?>/>No
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner">
                <span class="label">WAS YOUR JOB DESIGNATED AS A SAFETY-SENSITIVE FUNCTION IN ANY DOT-REGULATED MODE SUBJECT TO THE DRUG AND ALCOHOL TESTING REQUIREMENTS OF 49 CFR PART 40?</span>
                <input type="checkbox" <?php if ( $emp3Test == "Yes" ) { echo "checked=checked"; } ?>/>Yes
                <input type="checkbox" <?php if ( $emp3Test == "No" ) { echo "checked=checked"; } ?>/>No
            </td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="box inner-col" style="text-align: center;" width="70%">
                <span class="label">Employer</span>
            </td>
            <td class="box" style="text-align: center;">
                <span class="label">Date</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">Name</span>
                <span class="entry"><?php echo esc_html( $emp4Name ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="15%">
                <span class="label">From</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp4DtFrom ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="15%">
                <span class="label">To</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp4DtTo ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">Address</span>
                <span class="entry"><?php echo esc_html( $emp4AddrStreet ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="30%">
                <span class="label">Position Held</span>
                <span class="entry"><?php echo esc_html( $emp4Position ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">City</span>
                <span class="entry"><?php echo esc_html( $emp4AddrCity ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="border-left:none;">
                <span class="label">State</span>
                <span class="entry"><?php echo esc_html( $emp4AddrState ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="border-left:none;">
                <span class="label">Zip</span>
                <span class="entry"><?php echo esc_html( $emp4AddrZip ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="30%">
                <span class="label">Salary/Wage</span>
                <span class="entry"><?php echo esc_html( $emp4Salary ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner">
                <span class="label">WERE YOU SUBJECT TO THE FMCSRs+ WHILE EMPLOYED?</span>
                <input type="checkbox" <?php if ( $emp4FMCSR == "Yes" ) { echo "checked=checked"; } ?>/>Yes
                <input type="checkbox" <?php if ( $emp4FMCSR == "No" ) { echo "checked=checked"; } ?>/>No
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner">
                <span class="label">WAS YOUR JOB DESIGNATED AS A SAFETY-SENSITIVE FUNCTION IN ANY DOT-REGULATED MODE SUBJECT TO THE DRUG AND ALCOHOL TESTING REQUIREMENTS OF 49 CFR PART 40?</span>
                <input type="checkbox" <?php if ( $emp4Test == "Yes" ) { echo "checked=checked"; } ?>/>Yes
                <input type="checkbox" <?php if ( $emp4Test == "No" ) { echo "checked=checked"; } ?>/>No
            </td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="box inner-col" style="text-align: center;" width="70%">
                <span class="label">Employer</span>
            </td>
            <td class="box" style="text-align: center;">
                <span class="label">Date</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">Name</span>
                <span class="entry"><?php echo esc_html( $emp5Name ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="15%">
                <span class="label">From</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp5DtFrom ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="15%">
                <span class="label">To</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp5DtTo ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">Address</span>
                <span class="entry"><?php echo esc_html( $emp5AddrStreet ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="30%">
                <span class="label">Position Held</span>
                <span class="entry"><?php echo esc_html( $emp5Position ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">City</span>
                <span class="entry"><?php echo esc_html( $emp5AddrCity ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="border-left:none;">
                <span class="label">State</span>
                <span class="entry"><?php echo esc_html( $emp5AddrState ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="border-left:none;">
                <span class="label">Zip</span>
                <span class="entry"><?php echo esc_html( $emp5AddrZip ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="30%">
                <span class="label">Salary/Wage</span>
                <span class="entry"><?php echo esc_html( $emp5Salary ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner">
                <span class="label">WERE YOU SUBJECT TO THE FMCSRs+ WHILE EMPLOYED?</span>
                <input type="checkbox" <?php if ( $emp5FMCSR == "Yes" ) { echo "checked=checked"; } ?>/>Yes
                <input type="checkbox" <?php if ( $emp5FMCSR == "No" ) { echo "checked=checked"; } ?>/>No
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner">
                <span class="label">WAS YOUR JOB DESIGNATED AS A SAFETY-SENSITIVE FUNCTION IN ANY DOT-REGULATED MODE SUBJECT TO THE DRUG AND ALCOHOL TESTING REQUIREMENTS OF 49 CFR PART 40?</span>
                <input type="checkbox" <?php if ( $emp5Test == "Yes" ) { echo "checked=checked"; } ?>/>Yes
                <input type="checkbox" <?php if ( $emp5Test == "No" ) { echo "checked=checked"; } ?>/>No
            </td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="box inner-col" style="text-align: center;" width="70%">
                <span class="label">Employer</span>
            </td>
            <td class="box" style="text-align: center;">
                <span class="label">Date</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">Name</span>
                <span class="entry"><?php echo esc_html( $emp6Name ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="15%">
                <span class="label">From</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp6DtFrom ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="15%">
                <span class="label">To</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp6DtTo ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">Address</span>
                <span class="entry"><?php echo esc_html( $emp6AddrStreet ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="30%">
                <span class="label">Position Held</span>
                <span class="entry"><?php echo esc_html( $emp6Position ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner inner-col">
                <span class="label">City</span>
                <span class="entry"><?php echo esc_html( $emp6AddrCity ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="border-left:none;">
                <span class="label">State</span>
                <span class="entry"><?php echo esc_html( $emp6AddrState ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="border-left:none;">
                <span class="label">Zip</span>
                <span class="entry"><?php echo esc_html( $emp6AddrZip ); ?>&nbsp;</span>
            </td>
            <td class="box inner smaller" width="30%">
                <span class="label">Salary/Wage</span>
                <span class="entry"><?php echo esc_html( $emp6Salary ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner">
                <span class="label">WERE YOU SUBJECT TO THE FMCSRs+ WHILE EMPLOYED?</span>
                <input type="checkbox" <?php if ( $emp6FMCSR == "Yes" ) { echo "checked=checked"; } ?>/>Yes
                <input type="checkbox" <?php if ( $emp6FMCSR == "No" ) { echo "checked=checked"; } ?>/>No
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="box inner">
                <span class="label">WAS YOUR JOB DESIGNATED AS A SAFETY-SENSITIVE FUNCTION IN ANY DOT-REGULATED MODE SUBJECT TO THE DRUG AND ALCOHOL TESTING REQUIREMENTS OF 49 CFR PART 40?</span>
                <input type="checkbox" <?php if ( $emp6Test == "Yes" ) { echo "checked=checked"; } ?>/>Yes
                <input type="checkbox" <?php if ( $emp6Test == "No" ) { echo "checked=checked"; } ?>/>No
            </td>
        </tr>
    </table>
    <p class="smaller">
        *Includes vehicles having a GVWR of 26,001 lbs. or more, vehicles designed to transport 16 or more passengers (including the driver), or any size vehicle used to transport hazardous materials in a quantity requiring placarding.
    </p>
    <p class="smaller">
        +The Federal Motor Carrier Safety Regulations (FMCSRs) apply to anyone operating a motor vehicle on a highway in interstate commerce to transport passengers or property when the vehicle: (1) weighs or has a GVWR of 10,001 pounds or more, (2) is designed or used to transport more than 8 passengers (including the driver), OR (3) is of any size and is used to transport hazardous materials in a quantity requiring placarding.
    </p>
    <!-- ACCIDENTS -->
    <p class="smaller" style="margin-bottom:0;padding-bottom:0;"><b>ACCIDENT RECORD</b> FOR PAST 3 YEARS OR MORE (ATTACH SHEET IF MORE SPACE IS NEEDED) IF NONE, WRITE <b>NONE</p>
    <table autosize="1">
        <tr class="row">
            <td class="box top inner-col" width="15%">
            </td>
            <td class="box top inner-row" style="text-align: center;" width="12%">
                <span class="label smaller">DATES</span>
            </td>
            <td class="box inner-col" style="text-align: center;">
                <span class="label smaller">NATURE OF ACCIDENT<br />(HEAD-ON. REAR-END. UPSE1, ETC.)</span>
            </td>
            <td class="box inner-col" style="text-align: center;" width="15%">
                <span class="label smaller">FATALITIES</span>
            </td>
            <td class="box inner-col" style="text-align: center;" width="15%">
                <span class="label smaller">INJURIES</span>
            </td>
            <td class="box" style="text-align: center;" width="15%">
                <span class="label smaller">HAZARDOUS<br />MATERIAL SPILL</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner inner-col" style="text-align: left;">
                <span class="label smaller">LAST ACCIDENT</span>
            </td>
            <td class="box inner inner-row" style="text-align: left;">
                <span class="entry"><?php echo esc_html( $accident1Dt ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $accident1Nature ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $accident1Fatality ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $accident1Injury ); ?>&nbsp;</span>
            </td>
            <td class="box" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $accident1Spill ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner inner-col" style="text-align: left;">
                <span class="label smaller">PREVIOUS ACCIDENT</span>
            </td>
            <td class="box inner inner-row" style="text-align: left;">
                <span class="entry"><?php echo esc_html( $accident2Dt ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $accident2Nature ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $accident2Fatality ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $accident2Injury ); ?>&nbsp;</span>
            </td>
            <td class="box" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $accident2Spill ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner inner-col" style="text-align: left;">
                <span class="label smaller">NEXT PREVIOUS</span>
            </td>
            <td class="box inner inner-row" style="text-align: left;">
                <span class="entry"><?php echo esc_html( $accident3Dt ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $accident3Nature ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $accident3Fatality ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $accident3Injury ); ?>&nbsp;</span>
            </td>
            <td class="box" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $accident3Spill ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <!-- CONVICTIONS -->
    <p class="smaller" style="margin-bottom:0;padding-bottom:0;"><b>TRAFFIC CONVICTIONS</b> AND FORFEITURES FOR THE PAST 3 YEARS (OTHER THAN PARKING VIOLATIONS) IF NONE, WRITE <b>NONE</b></p>
    <table autosize="1">
        <tr class="row">
            <td class="box inner-col" style="text-align: center;" width="30%">
                <span class="label smaller">LOCATION</span>
            </td>
            <td class="box inner-col" style="text-align: center;" width="15%">
                <span class="label smaller">DATE</span>
            </td>
            <td class="box inner-col" style="text-align: center;" width="25%">
                <span class="label smaller">CHARGE</span>
            </td>
            <td class="box inner-col" style="text-align: center;">
                <span class="label smaller">PENALTY</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $conviction1Loc ); ?>&nbsp;</span>
            </td>
            <td class="box inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $conviction1Dt ); ?>&nbsp;</span>
            </td>
            <td class="box inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $conviction1Chg ); ?>&nbsp;</span>
            </td>
            <td class="box inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $conviction1Pen ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $conviction2Loc ); ?>&nbsp;</span>
            </td>
            <td class="box inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $conviction2Dt ); ?>&nbsp;</span>
            </td>
            <td class="box inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $conviction2Chg ); ?>&nbsp;</span>
            </td>
            <td class="box inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $conviction2Pen ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $conviction3Loc ); ?>&nbsp;</span>
            </td>
            <td class="box inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $conviction3Dt ); ?>&nbsp;</span>
            </td>
            <td class="box inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $conviction3Chg ); ?>&nbsp;</span>
            </td>
            <td class="box inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $conviction3Pen ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <p class="smaller" style="text-align:center;margin:0;padding:0;">(ATTACH SHEET IF MORE SPACE IS NEEDED)</p>
    <!-- LICENSES -->
    <p class="section-title smaller">EXPERIENCE AND QUALIFICATIONS - DRIVER</p>
    <p class="smaller" style="padding:0;margin:0;">
        List all driver licenses or permits held in the past 3 years
    </p>
    <table autosize="1">
        <tr class="row">
            <td class="box inner-top" width="10%">
            </td>
            <td class="box inner-col" style="text-align: center;" width="10%">
                <span class="label smaller">STATE</span>
            </td>
            <td class="box inner-col" style="text-align: center;" width="20%">
                <span class="label smaller">LICENSE NO.</span>
            </td>
            <td class="box inner-col" style="text-align: center;" width="15%">
                <span class="label smaller">CLASS</span>
            </td>
            <td class="box inner-col" style="text-align: center;">
                <span class="label smaller">ENDORSEMENTS</span>
            </td>
            <td class="box inner-col" style="text-align: center;" width="20%">
                <span class="label smaller">EXPIRATION DATE</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner-left" style="text-align:center;">
                <span class="section-title smaller">DRIVER</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $license1State ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $license1Num ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $license1Cls ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $license1End ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $license1Exp ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner-left" style="text-align:center;">
                <span class="section-title smaller">LICENSES</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $license2State ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $license2Num ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $license2Cls ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $license2End ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $license2Exp ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner-bottom">
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $license3State ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $license3Num ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $license3Cls ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $license3End ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $license3Exp ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="70%">
                <span class="label smaller">A. Have you ever been denied a license, permit or privilege to operate a motor vehicle?</span>
            </td>
            <td width="5%">
                Yes
            </td>
            <td class="field" width="10%">
                <span class="entry"><?php if ( $licenseDenied == "Yes" ) { echo "X"; } ?>&nbsp;</span>
            </td>
            <td width="5%">
                No
            </td>
            <td class="field" width="10%">
                <span class="entry"><?php if ( $licenseDenied == "No" ) { echo "X"; } ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="70%">
                <span class="label smaller">8. Has any license, permit or privilege ever been suspended or revoked?</span>
            </td>
            <td width="5%">
                Yes
            </td>
            <td class="field" width="10%">
                <span class="entry"><?php if ( $licenseRevoked == "Yes" ) { echo "X"; } ?>&nbsp;</span>
            </td>
            <td width="5%">
                No
            </td>
            <td class="field" width="10%">
                <span class="entry"><?php if ( $licenseRevoked == "No" ) { echo "X"; } ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td width="40%">
                <span class="label smaller">IF THE ANSWER TO EITHER A OR B IS YES, GIVE DETAILS</span>
            </td>
            <td class="field" width="60%">
                <span class="entry"><?php echo esc_html( $licenseDetails ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <!-- DRIVING EXPERIENCE -->
    <p class="section-title smaller" style="text-align:left;"><b>DRIVING EXPERIENCE</b> CHECK YES OR NO</p>
    <table autosize="1">
        <tr class="row">
            <td class="box top inner-col" style="text-align: center;" width="20%">
                <span class="label smaller"><b>CLASS OF EQUIPMENT</b></span>
            </td>
            <td class="box top inner-row" width="11%">
            </td>
            <td class="box top inner-row" width="10%">
            </td>
            <td class="box top inner-col" style="text-align: center;" width="25%">
                <span class="label smaller">CIRCLE TYPE OF EQUIPMENT</span>
            </td>
            <td class="box top inner-col" style="text-align: center;" width="15%">
                <span class="label smaller">DATES<br />FROM (M/Y)  TO(M/Y)</span>
            </td>
            <td class="box top inner-col end" style="text-align: center;">
                <span class="label smaller">APPROX. NO. OF MILES<br />(TOTAL)</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner inner-col" style="text-align: left;">
                <span class="label smaller">STRAIGHT TRUCK</span>
            </td>
            <td class="box inner inner-row">
                <span class="entry smaller">
                    <input type="checkbox" <?php if ( $straightTruck == "Yes" ) { echo "checked=checked"; } ?>/>YES
                    <input type="checkbox" <?php if ( $straightTruck == "No" ) { echo "checked=checked"; } ?>/>NO
                </span>
            </td>
            <td class="box inner inner-row">
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry smaller">
                    <?php
                        $equipment = ['VAN', 'TANK', 'FLAT', 'DUMP', 'REFER']; // Main equipment types
                        $straightEquip = isset($straightEquip) ? (array) $straightEquip : []; // Ensure it's an array
                        $output = array_map(function($item) use ($straightEquip) {
                            if (in_array($item, $straightEquip)) {
                                return '<span class="circle">' . $item . '</span>';
                            }
                            return $item;
                        }, $equipment);
                        echo '(' . implode(', ', $output) . ')';
                    ?>
                </span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $straightDt ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col end" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $straightMiles ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner inner-col" style="text-align: left;">
                <span class="label smaller">TRACTOR AND SEMI TRAILER</span>
            </td>
            <td class="box inner inner-row">
                <span class="entry smaller">
                    <input type="checkbox" <?php if ( $tractorSemi == "Yes" ) { echo "checked=checked"; } ?>/>YES
                    <input type="checkbox" <?php if ( $tractorSemi == "No" ) { echo "checked=checked"; } ?>/>NO
                </span>
            </td>
            <td class="box inner inner-row">
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry smaller">
                    <?php
                        $equipment = ['VAN', 'TANK', 'FLAT', 'DUMP', 'REFER']; // Main equipment types
                        $tractorSemiEquip = isset($tractorSemiEquip) ? (array) $tractorSemiEquip : []; // Ensure it's an array
                        $output = array_map(function($item) use ($tractorSemiEquip) {
                            if (in_array($item, $tractorSemiEquip)) {
                                return '<span class="circle">' . $item . '</span>';
                            }
                            return $item;
                        }, $equipment);
                        echo '(' . implode(', ', $output) . ')';
                    ?>
                </span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $tractorSemiDt ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col end" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $tractorSemiMiles ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner inner-col" style="text-align: left;">
                <span class="label smaller">TRACTOR - TWO TRAILERS</span>
            </td>
            <td class="box inner inner-row">
                <span class="entry smaller">
                    <input type="checkbox" <?php if ( $tractor2 == "Yes" ) { echo "checked=checked"; } ?>/>YES
                    <input type="checkbox" <?php if ( $tractor2 == "No" ) { echo "checked=checked"; } ?>/>NO
                </span>
            </td>
            <td class="box inner inner-row">
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry smaller">
                    <?php
                        $equipment = ['VAN', 'TANK', 'FLAT', 'DUMP', 'REFER']; // Main equipment types
                        $tractor2Equip = isset($tractor2Equip) ? (array) $tractor2Equip : []; // Ensure it's an array
                        $output = array_map(function($item) use ($tractor2Equip) {
                            if (in_array($item, $tractor2Equip)) {
                                return '<span class="circle">' . $item . '</span>';
                            }
                            return $item;
                        }, $equipment);
                        echo '(' . implode(', ', $output) . ')';
                    ?>
                </span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $tractor2Dt ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col end" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $tractor2Miles ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner inner-col" style="text-align: left;">
                <span class="label smaller">TRACTOR - THREE TRAILERS</span>
            </td>
            <td class="box inner inner-row">
                <span class="entry smaller">
                    <input type="checkbox" <?php if ( $tractor3 == "Yes" ) { echo "checked=checked"; } ?>/>YES
                    <input type="checkbox" <?php if ( $tractor3 == "No" ) { echo "checked=checked"; } ?>/>NO
                </span>
            </td>
            <td class="box inner inner-row">
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry smaller">
                    <?php
                        $equipment = ['VAN', 'TANK', 'FLAT', 'DUMP', 'REFER']; // Main equipment types
                        $tractor3Equip = isset($tractor3Equip) ? (array) $tractor3Equip : []; // Ensure it's an array
                        $output = array_map(function($item) use ($tractor3Equip) {
                            if (in_array($item, $tractor3Equip)) {
                                return '<span class="circle">' . $item . '</span>';
                            }
                            return $item;
                        }, $equipment);
                        echo '(' . implode(', ', $output) . ')';
                    ?>
                </span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $tractor3Dt ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col end" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $tractor3Miles ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner inner-col" style="text-align: left;">
                <span class="label smaller">MOTORCOACH-SCHOOLBUS</span>
            </td>
            <td class="box inner inner-row">
                <span class="entry smaller">
                    <input type="checkbox" <?php if ( $coachBus1 == "Yes" ) { echo "checked=checked"; } ?>/>YES
                    <input type="checkbox" <?php if ( $coachBus1 == "No" ) { echo "checked=checked"; } ?>/>NO
                </span>
            </td>
            <td class="box inner inner-row">
                <span class="label smaller">More than 8 passengers</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry">--</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $coachBus1Dt ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col end" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $coachBus1Miles ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner inner-col" style="text-align: left;">
                <span class="label smaller">MOTORCOACH-SCHOOLBUS</span>
            </td>
            <td class="box inner inner-row">
                <span class="entry smaller">
                    <input type="checkbox" <?php if ( $coachBus2 == "Yes" ) { echo "checked=checked"; } ?>/>YES
                    <input type="checkbox" <?php if ( $coachBus2 == "No" ) { echo "checked=checked"; } ?>/>NO
                </span>
            </td>
            <td class="box inner inner-row">
                <span class="label smaller">More than 15 passengers</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry">--</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $coachBus2Dt ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col end" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $coachBus2Miles ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td class="box inner inner-col" style="text-align: left;">
                <span class="label smaller">OTHER</span>
            </td>
            <td class="box inner inner-row">
                <span class="entry smaller">
                    <input type="checkbox" <?php if ( $otherTruck == "Yes" ) { echo "checked=checked"; } ?>/>YES
                    <input type="checkbox" <?php if ( $otherTruck == "No" ) { echo "checked=checked"; } ?>/>NO
                </span>
            </td>
            <td class="box inner inner-row">
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry">&nbsp;</span>
            </td>
            <td class="box inner inner-col" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $otherDt ); ?>&nbsp;</span>
            </td>
            <td class="box inner inner-col end" style="text-align: center;">
                <span class="entry"><?php echo esc_html( $otherMiles ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="35%">
                <span class="smaller">LIST STATES OPERATED IN FOR LAST FIVE YEARS:</span>
            </td>
            <td class="field">
                <span class="entry smaller"><?php echo esc_html( $states ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="100%">
                <span class="entry smaller"><?php echo esc_html( $nothing ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="52%">
                <span class="smaller">SHOW SPECIAL COURSES OR TRAINING THAT WILL HELP YOU AS A DRIVER:</span>
            </td>
            <td class="field smaller">
                <span class="entry smaller"><?php echo esc_html( $courses ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="45%">
                <span class="smaller">WHICH SAFE DRIVING AWARDS DO YOU HOLD AND FROM WHOM?</span>
            </td>
            <td class="field smaller">
                <span class="entry smaller"><?php echo esc_html( $awards ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <p class="section-title smaller">EXPERIENCE AND QUALIFICATIONS - OTHER</p>
    <table autosize="1">
        <tr class="row">
            <td class="label">
                <span class="smaller">SHOW ANY TRUCKING, TRANSPORTATION OR OTHER EXPERIENCE THAT MAY HELP IN YOUR WORK FOR THIS COMPANY</span>
            </td>
        </tr>
        <tr class="row">
            <td class="field">
                <span class="entry smaller"><?php echo esc_html( $otherExperience ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">
                <span class="smaller">LIST COURSES AND TRAINING OTHER THAN SHOWN ELSEWHERE IN THIS APPLICATION</span>
            </td>
        </tr>
        <tr class="row">
            <td class="field">
                <span class="entry smaller"><?php echo esc_html( $othercourses ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">
                <span class="smaller">LIST SPECIAL EQUIPMENT OR TECHNICAL MATERIALS YOU CAN WORK WITH (OTHER THAN THOSE ALREADY SHOWN)</span>
            </td>
        </tr>
        <tr class="row">
            <td class="field smaller">
                <span class="entry smaller"><?php echo esc_html( $specialEqip ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <p class="section-title smaller">EDUCATION</p>
    <table autosize="1">
        <tr class="row">
            <td class="label">
                <span class="smaller">CIRCLE HIGHEST GRADE COMPLETED:</span>
                <?php 
                // Loop through grades 1 to 8
                for ($grade = 1; $grade <= 8; $grade++) {
                    if ($highGrade == (string)$grade) {
                        echo '<span class="circle">' . $grade . '</span>';
                    } else {
                        echo '<span>' . $grade . '</span>';
                    }
                    // Add a space after each grade except the last one
                    if ($grade < 8) {
                        echo ' ';
                    }
                }
                ?>
            </td>
            <td class="label">
                <span class="smaller">HIGH SCHOOL</span> 
                <?php 
                // Array of grade labels
                $highSchoolGrades = ['High School 1', 'High School 2', 'High School 3', 'High School 4'];
    
                // Loop through the array
                foreach ($highSchoolGrades as $index => $label) {
                    // Convert the index to a 1-based grade number
                    $gradeNumber = $index + 1;
    
                    // Check if this grade is the selected one
                    if ($highGrade == $label) {
                        echo '<span class="circle">' . $gradeNumber . '</span>';
                    } else {
                        echo '<span>' . $gradeNumber . '</span>';
                    }
    
                    // Add a space after each grade except the last one
                    if ($gradeNumber < count($highSchoolGrades)) {
                        echo ' ';
                    }
                }
                ?>
            </td>
            <td class="label">
                <span class="smaller">COLLEGE</span> 
                <?php 
                // Array of grade labels
                $collegeGrades = ['College 1', 'College 2', 'College 3', 'College 4'];
    
                // Loop through the array
                foreach ($collegeGrades as $index => $label) {
                    // Convert the index to a 1-based grade number
                    $gradeNumber = $index + 1;
    
                    // Check if this grade is the selected one
                    if ($highGrade == $label) {
                        echo '<span class="circle">' . $gradeNumber . '</span>';
                    } else {
                        echo '<span>' . $gradeNumber . '</span>';
                    }
    
                    // Add a space after each grade except the last one
                    if ($gradeNumber < count($collegeGrades)) {
                        echo ' ';
                    }
                }
                ?>
            </td>
        </tr>
    </table>
    <p class="section-title smaller">TO BE READ AND SIGNED BY APPLICANT</p>
    <p class="smaller" style="margin:0;padding:0;">This certifies that this application was completed by me, and that all entries on it and information in it are true and complete to the best of my knowledge.</p>
    <table autosize="1">
        <tr class="row">
            <td width="9%">
                <span class="label smaller">Signature</span>
            </td>
            <td class="field">
                <span class="entry">
                    <?php 
                    //echo esc_html( $signature );
                    /* Output signature if it exists (this prevents a red X showing up in the PDF when the image doesn't exist) */
                    if ( is_file( $signature ) ) {
                        echo '<img src="' . esc_attr( $signature ) . '" width="150" />'; /* best to use the path to reference the image and check it exists on the server first */
                    } 
                    ?>&nbsp;
                </span>
            </td>
            <td width="5.5%">
                <span class="label smaller">Date:</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $signDate ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <pagebreak/>
    <!-- FMCSA DRUG & ALCOHOL CONSENT -->
    <h1 class="section-title">CDL Applicants & Drivers</h1>
    <br />
    <h3 class="section-title">
        General Consent for Full and/or Limited Query of the Federal Motor Carrier<br/>
        Safety Administration (FMCSA) Drug and Alcohol Clearinghouse
    </h3>
    <br />
    <p style="font-size:16px;">
        I, <span class="field entry" style="font-size:16px;"><?php echo esc_html( $fullName ); ?>&nbsp;</span><i>(Printed Name)</i>, hereby provide consent 
        to Wrecker Service, Inc. to conduct a full and/or limited query of the 
        FMCSA Commercial Driver's License Drug and Alcohol Clearinghouse to 
        determine whether a drug or alcohol violation information about me exists in the 
        Clearinghouse. The terms of this consent are unlimited while employed by 
        Wrecker Service, Inc.
    </p>
    <p style="font-size:16px;">
        I understand that a full query must be conducted for pre employment purposes. I also 
        understand that if the full and/or limited query conducted by Wrecker 
        Service, Inc. indicates that drug or alcohol violation information about me exists in 
        the Clearinghouse, FMCSA will not disclose that information to Wrecker 
        Service, Inc. without first obtaining additional specific consent from me.
    </p>
    <p style="font-size:16px;">
        I further understand that if I refuse to provide consent for Wrecker 
        Service, Inc. to conduct a full and/or limited query of the Clearinghouse, 
        Wrecker Service, Inc. must prohibit me from performing safety-sensitive functions, 
        including driving a commercial motor vehicle, as required by FMCSA's drug and 
        alcohol program regulations.
    </p>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="field" style="text-align:left;font-size:16px;" width="50%">
                <?php 
                    //echo esc_html( $signature );
                    /* Output signature if it exists (this prevents a red X showing up in the PDF when the image doesn't exist) */
                    if ( is_file( $signature ) ) {
                        echo '<img src="' . esc_attr( $signature ) . '" width="150" />'; /* best to use the path to reference the image and check it exists on the server first */
                    } 
                    ?>&nbsp;
            </td>
            <td class="field" style="text-align:left;font-size:16px;" width="50%"><span class="entry"><?php echo esc_html( $signDate ); ?>&nbsp;</span></td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label-sub" style="text-align:left;font-size:16px;" width="50%">Applicant / Employee Signature</td>
            <td class="label-sub" style="text-align:left;font-size:16px;" width="50%">Date</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="field" style="text-align:left;font-size:16px;" width="50%"><span class="entry"><?php echo esc_html( $fullName );?>&nbsp;</span></td>
            <td class="field" style="text-align:left;font-size:16px;" width="50%">&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label-sub" style="text-align:left;font-size:16px;" width="50%">Applicant / Employee Printed Name</td>
            <td class="label-sub" style="text-align:left;font-size:16px;" width="50%">&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="field" style="text-align:left;font-size:16px;" width="50%"><span class="entry"><?php echo esc_html( $email ); ?>&nbsp;</span></td>
            <td class="field" style="text-align:left;font-size:16px;" width="50%">&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label-sub" style="text-align:left;font-size:16px;" width="50%">Email Address <i>(print clearly)</i></td>
            <td class="label-sub" style="text-align:left;font-size:16px;" width="50%">&nbsp;</td>
        </tr>
    </table>
    <pagebreak/>
    <!-- BACKGROUND CONSENT -->
    <!-- <h2 class="section-title">WRECKER SERVICE, INC.</h2>
    <br />
    <h2 class="section-title">
        CONSENT FOR BACKGROUND RECORDS <br />
        AND DRIVER'S LICENSE RECORDS CHECK
    </h2>
    <h3 class="section-title">
        APPLICANT/EMPLOYEE I VOLUNTEER/ INTERN
    </h3>
    <p><b><i>Please</i> <u>PRINT</u></b></p>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="20%"><span class="entry"><?php echo esc_html( $lastName ); ?>&nbsp;</span></td>
            <td class="field" width="20%"><span class="entry"><?php echo esc_html( $firstName ); ?>&nbsp;</span></td>
            <td class="field" width="20%"><span class="entry"><?php echo esc_html( $middleName ); ?>&nbsp;</span></td>
            <td class="field" width="40%"><span class="entry"><?php echo esc_html( $maidenName ); ?>&nbsp;</span></td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label-sub" width="20%">Last</td>
            <td class="label-sub" width="20%">First</td>
            <td class="label-sub" width="20%">Middle</td>
            <td class="label-sub" width="40%">Maiden / Other Names Used</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="field" width="33.3%"><span class="entry"><?php echo esc_html( $dob ); ?>&nbsp;</span></td>
            <td class="field" width="33.3%"><span class="entry"><?php echo esc_html( $dob ); ?>&nbsp;</span></td>
            <td class="field" width="33.3%"><span class="entry"><?php echo esc_html( $ssn ); ?>&nbsp;</span></td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label-sub" width="33.3%">DOB<i>(MM/DD/YYYY)</i></td>
            <td class="label-sub" width="33.3%">Place of Birth</td>
            <td class="label-sub" width="33.3%">Social Security Number</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="field" width="60%"><span class="entry"><?php echo esc_html( $gender ); ?>&nbsp;</span></td>
            <td class="field" width="40%"><span class="entry"><?php echo esc_html( $race ); ?>&nbsp;</span></td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label-sub" width="60%">To which gender do you most identify?<br />(Male, Female, Transgender, Non-Binary)</td>
            <td class="label-sub" width="40%">Race - (White/Black; American Indian or Alaskan;<br />Asian or Pacific Islander; or Unknown)</td>
        </tr>
    </table>
    <p>Date & place of residence for the past seven (7) years:</p>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="15%">From / To</td>
            <td class="field" width="35%">Number & Street</td>
            <td class="field" width="25%">City</td>
            <td class="field" width="15%">State</td>
            <td class="field" width="10%">Zip</td>
        </tr>
    </table>
    <?php //calculate residence tenure
        $currentYear = date('Y', strtotime($signDate)); // Extract year from the sign date);
        $startYear = $currentYear - intval($AddrYrs);
        $yearRange = ($AddrYrs == 0) ? "$currentYear-Present" : "$startYear-Present";
    ?>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="15%"><span class="entry"><?php echo esc_html( $yearRange ); ?>&nbsp;</span></td>
            <td class="field" width="35%"><span class="entry"><?php echo esc_html( $AddrSt1 ); ?>&nbsp;</span></td>
            <td class="field" width="25%"><span class="entry"><?php echo esc_html( $AddrCty ); ?>&nbsp;</span></td>
            <td class="field" width="15%"><span class="entry"><?php echo esc_html( $AddrState ); ?>&nbsp;</span></td>
            <td class="field" width="10%"><span class="entry"><?php echo esc_html( $AddrZip ); ?>&nbsp;</span></td>
        </tr>
    </table>
    <?php //calculate residence tenure
        $endYear = $startYear;
        $startYear = $startYear - intval($prevAddr1Yrs);
        $yearRange = ($prevAddr1Yrs == 0) ? "$startYear-$endYear" : "$startYear-$endYear";
    ?>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="15%"><span class="entry"><?php echo esc_html( $prevAddr1Yrs ); ?>&nbsp;</span></td>
            <td class="field" width="35%"><span class="entry"><?php echo esc_html( $prevAddr1 ); ?>&nbsp;</span></td>
            <td class="field" width="25%"><span class="entry"><?php echo esc_html( $prevAddr1City ); ?>&nbsp;</span></td>
            <td class="field" width="15%"><span class="entry"><?php echo esc_html( $prevAddr1State ); ?>&nbsp;</span></td>
            <td class="field" width="10%"><span class="entry"><?php echo esc_html( $prevAddr1Zip ); ?>&nbsp;</span></td>
        </tr>
    </table>
    <?php //calculate residence tenure
        $endYear = $startYear;
        $startYear = $startYear - intval($prevAddr2Yrs);
        $yearRange = ($prevAddr2Yrs == 0) ? "$startYear-$endYear" : "$startYear-$endYear";
    ?>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="15%"><span class="entry"><?php echo esc_html( $prevAddr2Yrs ); ?>&nbsp;</span></td>
            <td class="field" width="35%"><span class="entry"><?php echo esc_html( $prevAddr2 ); ?>&nbsp;</span></td>
            <td class="field" width="25%"><span class="entry"><?php echo esc_html( $prevAddr2City ); ?>&nbsp;</span></td>
            <td class="field" width="15%"><span class="entry"><?php echo esc_html( $prevAddr2State ); ?>&nbsp;</span></td>
            <td class="field" width="10%"><span class="entry"><?php echo esc_html( $prevAddr2Zip ); ?>&nbsp;</span></td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="42%">Please list other states in which you have resided:</td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $states ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <p>Valid Identifying Document (Driver's License, State Issued Identification Card)</p>
    <table autosize="1">
        <tr class="row">
            <td>State of Issuance</td>	
            <td>Document Number</td>
            <td>Expiration Date</td>
        </tr>
        <tr class="row">
            <td class="field">
                <span class="entry"><span class="entry"><?php echo esc_html( $license1State ); ?>&nbsp;</span>
            </td>
            <td class="field">
                <span class="entry"><span class="entry"><?php echo esc_html( $license1Num ); ?>&nbsp;</span>
            </td>
            <td class="field">
                <span class="entry"><span class="entry"><?php echo esc_html( $license1Exp ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <p>
        I understand that Wrecker Service, lnc. (herein referred to as "Company") will request motor 
        vehicle driving records and a background check consisting of any/all wants, warrants, criminal history, 
        and sex-offender registry check that is to be used solely for employment-related purposes. I understand 
        that an offer of employment or continuation of employment will be contingent on the receipt and 
        evaluation of the driving records and background check results. The Company may also request 
        additional reports about me for employment-related purposes during the course of my employment. I 
        understand that my consent will apply throughout my employment to the extent permitted by law.
    </p>
    <p>
        I have carefully read and understand this CONSENT FOR BACKGROUND RECORDS AND 
        DRIVER'S LICENSE RECORDS statement and, by my signature below, I consent to the release of 
        motor vehicle records, criminal history, and sex-offender registry reports to the Company within the terms 
        of this statement.
    </p>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="50%">
                <?php 
                    //echo esc_html( $signature );
                    /* Output signature if it exists (this prevents a red X showing up in the PDF when the image doesn't exist) */
                    if ( is_file( $signature ) ) {
                        echo '<img src="' . esc_attr( $signature ) . '" width="150" />'; /* best to use the path to reference the image and check it exists on the server first */
                    } 
                ?>&nbsp;
            </td>
            <td class="field" width="50%"><span class="entry"><?php echo esc_html( $signDate ); ?>&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label-sub" width="50%">Signature of Employee</td>
            <td class="label-sub" width="50%">Date</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="field" width="50%"><span class="entry"><?php echo esc_html( $fullName ); ?>&nbsp;</span></td>
            <td class="field" width="50%">&nbsp;</td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label-sub" width="50%">Printed Name of Employee</td>
            <td class="label-sub" width="50%">&nbsp;</td>
        </tr>
    </table>
    <pagebreak/> -->
    <!-- BACKGROUND CONSENT 2 -->
    <h3 class="section-title">DISCLOSURE AND AUTHORIZATION TO OBTAIN CONSUMER REPORT </h3>
    <h3 class="section-title">FOR EMPLOYMENT PURPOSES</h3>
    <p class="smallish">
        Wrecker Service, Inc. may obtain a consumer report (commonly known as a background report) and/or investigative 
        consumer report from a consumer reporting agency for employment purposes.  The consumer report may include information 
        concerning your employment history, education, qualifications, character, general reputation, personal characteristics, criminal 
        record, motor vehicle record, mode of living and/or credit standing and indebtedness. This information may be obtained from public 
        and/or private sources.
    </p>
    <p class="smallish">
        A consumer report and/or an investigative consumer report may be obtained in processing your application for employment, or at 
        any time during your employment period, as authorized by state law and/or the Fair Credit Reporting Act (FCRA). Should an 
        investigative consumer report (a consumer report in which the above types of information are obtained through personal interviews) 
        be requested, you will have the right to obtain a complete and accurate disclosure of the nature and scope of the investigation 
        requested and a written summary of your rights under the Fair Credit Reporting Act.
    </p>
    <p class="smallish">
        In the event that information from a consumer report obtained about you from a consumer reporting agency is used in whole or in 
        part in making an adverse decision with regard to employment, you will be provided with a copy of the consumer report and a 
        description in writing of your rights under the law.
    </p>
    <div style="border:1px solid black;padding:1%;">
        <table autosize="1">
            <tr class="row">
                <td class="field" width=25%><span class="entry"><?php echo esc_html( $lastName ); ?>&nbsp;</span></td>
                <td class="field" width=25%><span class="entry"><?php echo esc_html( $firstName ); ?>&nbsp;</span></td>
                <td class="field" width=25%><span class="entry"><?php echo esc_html( $middleName ); ?>&nbsp;</span></td>
                <td class="field" width=25%><span class="entry"><?php echo esc_html( $maidenName ); ?>&nbsp;</span></td>
            </tr>
            <tr class="row">
                <td class="label-sub">Last</td>
                <td class="label-sub">First</td>
                <td class="label-sub">Middle</td>
                <td class="label-sub">Maiden / Other Names Used</td>
            </tr>
        </table>
        <table autosize="1">
            <tr class="row">
                <td class="field" width=33.3%><span class="entry"><?php echo esc_html( $dob ); ?>&nbsp;</span></td>
                <td class="field" width=33.3%><span class="entry"><?php echo esc_html( $AddrCty ); ?>&nbsp;</span></td>
                <td class="field" width=33.3%><span class="entry"><?php echo esc_html( $ssn ); ?>&nbsp;</span></td>
            </tr>
            <tr class="row">
                <td class="label-sub">DOB<i>(MM/DD/YYYY)</i></td>
                <td class="label-sub">Place of Birth (City, State, Country)</td>
                <td class="label-sub">Social Security Number</td>
            </tr>
        </table>
        <table autosize="1">
            <tr class="row">
                <td class="field" width=35%><span class="entry"><?php echo esc_html( $gender ); ?>&nbsp;</span></td>
                <td class="field" width=65%><span class="entry"><?php echo esc_html( $race ); ?>&nbsp;</span></td>
            </tr>
            <tr class="row">
                <td class="label-sub">Legal Gender (M/F/X)</td>
                <td class="label-sub">Race – (White/Black; American Indian or Alaskan; Asian or Pacific Islander; or Unknown)</td>
            </tr>
        </table>
        <p style="text-align:left;margin:0;padding:0;"><b>Valid Identifying Document (Driver’s License, State Issued Identification Card)</b></p>
        <table autosize="1">
            <tr class="row">
                <td class="field" width=33.3%><span class="entry"><?php echo esc_html( $license1State ); ?>&nbsp;</span></td>
                <td class="field" width=33.3%><span class="entry"><?php echo esc_html( $license1Num ); ?>&nbsp;</span></td>
                <td class="field" width=33.3%><span class="entry"><?php echo esc_html( $license1Exp ); ?>&nbsp;</span></td>
            </tr>
            <tr class="row">
                <td class="label-sub">State of Issuance</td>
                <td class="label-sub">Document Number</td>
                <td class="label-sub">Expiration Date</td>
            </tr>
        </table>
    </div>
    <h3 class="section-title" style="text-align:left;margin:0;padding:0;">AUTHORIZATION</h3>
    <p class="smallish">
        I have carefully read and understand this Disclosure and Authorization Form and the attached Summary of Rights under the Fair 
        Credit Reporting Act.  I hereby authorize Wrecker Service, Inc. to obtain and/or its agent to obtain and furnish to 
        Wrecker Service, Inc. information related to my background to be used for employment purposes. I hereby authorize 
        any law enforcement agency, institution (including learning institution), information service bureau, credit bureau, record/data 
        repository, court, motor vehicle record agency, employer, military, and other individuals and sources contacted by 
        Wrecker Service, Inc. and/or its agent to furnish the information requested by the consumer reporting agency for employment 
        purposes. The information obtained may be redisclosed to other Federal agencies for the above purposes and in fulfillment of 
        official responsibilities to the extent that such disclosure is permitted by law
    </p>
    <p class="smallish">
        I understand that Wrecker Service, Inc. will request motor vehicle driving records and a background check consisting of 
        any/all wants, warrants, criminal history, and sex-offender registry check that is to be used solely for employment-related purposes. 
        I understand that an offer of employment or continuation of employment will be contingent on the receipt and evaluation of the 
        driving records and background check results. The Company may also request additional reports about me for employment-related 
        purposes during the course of my employment. I understand that my consent will apply throughout my employment to the extent 
        permitted by law. I understand and agree that an email, facsimile (FAX), or photographic copy of this authorization will be as valid 
        as the original.
    </p>
    <p class="smallish">
        I hereby release Wrecker Service, Inc., all its agents and employees, and all persons, agencies, and entities furnishing 
        information or reports about me from all liability arising out of the request for or release of any of the above-mentioned information 
        or reports.
    </p>
    <div style="border:1px solid black;padding:1%;">
        <h3 class="section-title" style="text-align:left;">Applicant/Employee:</h3>
        <table autosize="1">
            <tr class="row">
                <td class="field" width="50%">
                    <?php 
                    //echo esc_html( $signature );
                    /* Output signature if it exists (this prevents a red X showing up in the PDF when the image doesn't exist) */
                    if ( is_file( $signature ) ) {
                        echo '<img src="' . esc_attr( $signature ) . '" width="150" />'; /* best to use the path to reference the image and check it exists on the server first */
                    } 
                    ?>&nbsp;
                </td>
                <td class="field" width="50%"><span class="entry"><?php echo esc_html( $signDate ); ?>&nbsp;</span></td>
            </tr>
        </table>
        <table autosize="1">
            <tr class="row">
                <td class="label-sub" width="50%">Signature of Employee</td>
                <td class="label-sub" width="50%">Date</td>
            </tr>
        </table>
    </div>
    <pagebreak/>
    <!-- AVAILABILITY FORM -->
    <h2 class="section-title">AVAILABILITY FORM</h2>
    <br />
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5.5%">Name</td>
            <td class="field"><span class="entry"><?php echo esc_html( $fullName ); ?>&nbsp;</span></td>
            <td class="label" width="5.5%">Date</td>
            <td class="field"><span class="entry"><?php echo esc_html( $signDate ); ?>&nbsp;</span></td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="18%">Position Applying For:</td>
            <td class="field"><span class="entry"><?php echo esc_html( $position ); ?>&nbsp;</span></td>
        </tr>
    </table>
    <p>
        Wrecker Service, Inc. is open 24 hours per day, 7 days per week, and 365 days per year. The 
        purpose of this form is to establish your working availability. The information you provide will help 
        determine the location for your placement. Please be accurate and specific when providing the days and 
        times you are available. Applicants with the greatest availability will be given first consideration. Your 
        availability does not constitute an offer of employment or a schedule agreement. All shifts are scheduled 
        based on the needs of the business and may change as needed.
    </p>
    <p>
        This form is <b>NOT</b> a schedule request form. <b>Please only indicate specific dates/times you cannot work.</b>
        If you are hired and need to change your availability, you acknowledge that we may or may not be able 
        to accommodate the changes. You will also be responsible for updating this form if your availability 
        changes.
    </p>
    <table autosize="1">
        <tr class="row">
            <td>
                <span><input type="checkbox" width="5%" <?php if ( $availDN == "I am fully available to work any days/hours" ) { echo "checked=checked"; } ?>/>&nbsp;</span>
                <span class="label" width="28%">I <b>am</b> fully available to work any days/hours</span>
            </td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td>
                <span><input type="checkbox" width="5%" <?php if ( !empty($monFrom) ) { echo "checked=checked"; } ?>/>&nbsp;</span>
                <span class="label" width="28%">I <b>am NOT</b> available to work the following days/hours:</span>
            </td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5%">&nbsp;</td>
            <td>
                <input type="checkbox" width="5%" <?php if ( !empty($monFrom) ) { echo "checked=checked"; } ?>/>
                <span class="label">Monday</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>from:</i></b></span>
                <span class="field"><?php echo esc_html( $monFrom ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>to:</i></b></span>
                <span class="field"><?php echo esc_html( $monTo ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td class="label" width="40%">&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5%">&nbsp;</td>
            <td>
                <input type="checkbox" width="5%" <?php if ( !empty($tueFrom) ) { echo "checked=checked"; } ?>/>
                <span class="label">Tuesday</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>from:</i></b></span>
                <span class="field"><?php echo esc_html( $tueFrom ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>to:</i></b></span>
                <span class="field"><?php echo esc_html( $tueTo ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td class="label" width="40%">&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5%">&nbsp;</td>
            <td>
                <input type="checkbox" width="5%" <?php if ( !empty($wedFrom) ) { echo "checked=checked"; } ?>/>
                <span class="label">Wednesday</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>from:</i></b></span>
                <span class="field"><?php echo esc_html( $wedFrom ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>to:</i></b></span>
                <span class="field"><?php echo esc_html( $wedTo ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td class="label" width="40%">&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5%">&nbsp;</td>
            <td>
                <input type="checkbox" width="5%" <?php if ( !empty($thuFrom) ) { echo "checked=checked"; } ?>/>
                <span class="label">Thursday</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>from:</i></b></span>
                <span class="field"><?php echo esc_html( $thuFrom ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>to:</i></b></span>
                <span class="field"><?php echo esc_html( $thuTo ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td class="label" width="40%">&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5%">&nbsp;</td>
            <td>
                <input type="checkbox" width="5%" <?php if ( !empty($friFrom) ) { echo "checked=checked"; } ?>/>
                <span class="label">Friday</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>from:</i></b></span>
                <span class="field"><?php echo esc_html( $friFrom ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>to:</i></b></span>
                <span class="field"><?php echo esc_html( $friTo ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td class="label" width="40%">&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5%">&nbsp;</td>
            <td>
                <input type="checkbox" width="5%" <?php if ( !empty($satFrom) ) { echo "checked=checked"; } ?>/>
                <span class="label">Saturday</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>from:</i></b></span>
                <span class="field"><?php echo esc_html( $satFrom ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>to:</i></b></span>
                <span class="field"><?php echo esc_html( $satTo ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td class="label" width="40%">&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5%">&nbsp;</td>
            <td>
                <input type="checkbox" width="5%" <?php if ( !empty($sunFrom) ) { echo "checked=checked"; } ?>/>
                <span class="label">Sunday</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>from:</i></b></span>
                <span class="field"><?php echo esc_html( $sunFrom ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>to:</i></b></span>
                <span class="field"><?php echo esc_html( $sunTo ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td class="label" width="40%">&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="27%">I am available to start work on:</td>
            <td class="field"><span class="entry"><?php echo esc_html( $availDt ); ?>&nbsp;</span></td>
            <td width="55%">&nbsp;</td>
        </tr>
    </table>
    <p>
        <i>Once hired, to request days off, please use the Request for Time Off forms located at Dispatch or HR Office.</i>
    </p>
    <p>
        I understand that this form is not a condition of employment. I further understand that I may be 
        required to make a reasonable accommodation with my availability so that it does not cause a lack of 
        necessary staffing.
    </p>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="8%">Signed:</td>
            <td class="field" width="35%">
                <?php 
                    //echo esc_html( $signature );
                    /* Output signature if it exists (this prevents a red X showing up in the PDF when the image doesn't exist) */
                    if ( is_file( $signature ) ) {
                        echo '<img src="' . esc_attr( $signature ) . '" width="150" />'; /* best to use the path to reference the image and check it exists on the server first */
                    } 
                ?>&nbsp;
            </td>
            <td class="label" width="5.5%">Date</td>
            <td class="field"><span class="entry"><?php echo esc_html( $signDate ); ?>&nbsp;</span></td>
        </tr>
    </table>
</body>
</html>
