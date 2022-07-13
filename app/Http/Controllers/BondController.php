<?php

namespace App\Http\Controllers;

use App\Models\Bond;
use App\Models\Istiqraz;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BondController extends Controller
{
    public function payouts($id)
    {
        $istiqraz = Bond::findOrFail($id);

        $faizlerin_hesablanma_periodu = $istiqraz->percent_period;
        $kuponlarin_odenilme_tezliyi = $istiqraz->frequency;


        $periodmuddetigunile = 0;

        switch ($faizlerin_hesablanma_periodu) {
            case 360:
                $periodmuddetigunile = 12 / $kuponlarin_odenilme_tezliyi * 30;
                break;
            case 364:
                $periodmuddetigunile = 364 / $kuponlarin_odenilme_tezliyi;
                break;
        }

        $emissiya_tarixi = Carbon::parse($istiqraz->em_date);

        $res = [];

        $periudVaxti1 = $emissiya_tarixi->clone()->addDays($periodmuddetigunile);
        $res[]["date"] = $periudVaxti1;


        $periudVaxti2 = $periudVaxti1->clone()->addDays($periodmuddetigunile);
        $res[]["date"] = $periudVaxti2;

        $periudVaxti3 = $periudVaxti2->clone()->addDays($periodmuddetigunile);
        $res[]["date"] = $periudVaxti3;

        return response()->json($res);
    }

}
