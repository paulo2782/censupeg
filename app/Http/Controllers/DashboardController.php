<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Course;
use App\Partners;
use App\Call;

class DashboardController extends Controller
{
    public function dashboardShow(Request $request)
    {

        if (strlen($request->dateCurrent) == 0) {
            $dateCurrent = date('Y-m-d');
        } else {
            $dateCurrent = $request->dateCurrent;
        }

        $contact   = Contact::get();
        $iContacts = count($contact);

        $course   = Course::get();
        $iCourses = count($course);

        $partner   = Partners::get();
        $iPartners = count($partner);

        $month = date('m');
        $year  = date('Y');

        $call   = Call::whereYear('date_contact', '=', $year)->whereMonth('date_contact', '=',
            $month)->get();
        $iCalls = count($call);


        // GRAFICO HORAS
        $hourArray = [];
        for ($i = 1; $i <= 24; $i++) {
            if ($i < 10) {
                $hour = '0' . $i;
            } else {
                $hour = $i;
            }

            $data = Call::
            whereDate('date_contact', $dateCurrent)
                ->whereTime('time', ' like', $hour . '%')
                ->get();

            array_push($hourArray, count($data));

        }

        $day = substr($dateCurrent, 8, 2);

        return view('dashboards/dashboard',
            compact('iContacts', 'iCourses', 'iPartners', 'iCalls', 'hourArray', 'day', 'dateCurrent'));
    }
}
