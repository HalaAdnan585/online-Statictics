<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;


class family__data extends Controller
{
    public function indexData()
    {
        $datas = \App\family__data::where('user_id', '=', auth()->user()->id)->get();
        return view('index',compact('datas'));
    }



    public function index()
    {
        $datas = \App\family__data::where('user_id', '=', auth()->user()->id)->get();


        $family = \App\family__data::find(auth()->user()->id);
        $family_learnings = \App\family__data_learnings::find(auth()->user()->id);
        $family_works = \App\family__data_works::find(auth()->user()->id);
        $family_marriages = \App\family__data_marriages::find(auth()->user()->id);
        $housing_data = \App\housing_datas::find(auth()->user()->id);
        $data = array(
            'id' => auth()->user(),
            'ff' => $family,
            'ffL' => $family_learnings,
            'family_work' => $family_works,
            'family_marriages' => $family_marriages,
            'housing_data' => $housing_data,
        );
        return view('citizen',compact('datas'))->with($data);
    }

    public function storeCitizen(Request $request)
    {

        // There are the information of the data base family__data
        $request->validate([
            'name'=>'nullable',
            'citizin_relationship' => 'nullable',
            'citizin_gender' => 'nullable',
            'citizin_age' => 'nullable',
            'nationality' => 'nullable',
            'id1'=>'nullable|unique:family__datas,id|max:9|min:9',
            'placeOfMotherTimeInvidualBirth' => 'nullable',
            'citizin_place'=> 'nullable',
            'previous_place' => 'nullable',
            'reason_change_residence' => 'nullable',
            'religion' => 'nullable',
            'asylum_status' => 'nullable',
            'healthy_condition_difficulties' => 'nullable',
            'health_insurance' => 'nullable',
            'disease' => 'nullable',
            'periodAt_theCurrent_residenceIn_fullTime' => 'nullable',
        ]);
        $store_family__data = new \App\family__data;
        $store_family__data->fullName = $request->name;
        $store_family__data->relationship = $request->citizin_relationship;
        $store_family__data->gender =  $request->citizin_gender;
        $store_family__data->age =  $request->citizin_age;
        $store_family__data->nationality =  $request->nationality;
        $store_family__data->placeOfMotherTimeInvidualBirth =  $request->placeOfMotherTimeInvidualBirth;
        $store_family__data->previous_place =  $request->previous_place;
        $store_family__data->reason_change_residence =  $request->reason_change_residence;
        $store_family__data->religion =  $request->religion;
        $store_family__data->asylum_status =  $request->asylum_status;
        $store_family__data->healthy_condition_difficulties =  $request->healthy_condition_difficulties;
        $store_family__data->health_insurance =  $request->health_insurance;
        $store_family__data->disease =  $request->disease;
        $store_family__data->place = $request->citizin_place;
        $store_family__data->periodAt_theCurrent_residenceIn_fullTime =  $request->periodAt_theCurrent_residenceIn_fullTime;
        $store_family__data->id = $request->id1;
        $store_family__data->user_id = auth()->user()->id;
        $store_family__data->save();


        if (isset($request->name2)) {
            $store_family__data2 = new \App\family__data;
            $store_family__data2->fullName = $request->name2;
            $store_family__data2->relationship = $request->citizin_relationship2;
            $store_family__data2->gender =  $request->citizin_gender2;
            $store_family__data2->age =  $request->citizin_age2;
            $store_family__data2->nationality =  $request->nationality2;
            $store_family__data2->placeOfMotherTimeInvidualBirth =  $request->placeOfMotherTimeInvidualBirth2;
            $store_family__data2->previous_place =  $request->previous_place2;
            $store_family__data2->reason_change_residence =  $request->reason_change_residence2;
            $store_family__data2->religion =  $request->religion2;
            $store_family__data2->asylum_status =  $request->asylum_status2;
            $store_family__data2->healthy_condition_difficulties =  $request->healthy_condition_difficulties2;
            $store_family__data2->health_insurance =  $request->health_insurance2;
            $store_family__data2->disease =  $request->disease2;
            $store_family__data2->place = $request->citizin_place2;
            $store_family__data2->periodAt_theCurrent_residenceIn_fullTime =  $request->periodAt_theCurrent_residenceIn_fullTime2;
            $store_family__data2->id = $request->id12;
            $store_family__data2->user_id = auth()->user()->id;
            $store_family__data2->save();

        }

        if (isset($request->name3)) {
            $store_family__data3 = new \App\family__data;
            $store_family__data3->fullName = $request->name3;
            $store_family__data3->relationship = $request->citizin_relationship3;
            $store_family__data3->gender =  $request->citizin_gender3;
            $store_family__data3->age =  $request->citizin_age3;
            $store_family__data3->nationality =  $request->nationality3;
            $store_family__data3->placeOfMotherTimeInvidualBirth =  $request->placeOfMotherTimeInvidualBirth3;
            $store_family__data3->previous_place =  $request->previous_place2;
            $store_family__data3->reason_change_residence =  $request->reason_change_residence3;
            $store_family__data3->religion =  $request->religion3;
            $store_family__data3->asylum_status =  $request->asylum_status3;
            $store_family__data3->healthy_condition_difficulties =  $request->healthy_condition_difficulties3;
            $store_family__data3->health_insurance =  $request->health_insurance3;
            $store_family__data3->disease =  $request->disease3;
            $store_family__data3->place = $request->citizin_place3;
            $store_family__data3->periodAt_theCurrent_residenceIn_fullTime =  $request->periodAt_theCurrent_residenceIn_fullTime3;
            $store_family__data3->id = $request->id13;
            $store_family__data3->user_id = auth()->user()->id;
            $store_family__data3->save();

        }

        if (isset($request->name4)) {

            $store_family__data4 = new \App\family__data;
            $store_family__data4->fullName = $request->name4;
            $store_family__data4->relationship = $request->citizin_relationship4;
            $store_family__data4->gender =  $request->citizin_gender4;
            $store_family__data4->age =  $request->citizin_age4;
            $store_family__data4->nationality =  $request->nationality4;
            $store_family__data4->placeOfMotherTimeInvidualBirth =  $request->placeOfMotherTimeInvidualBirth4;
            $store_family__data4->previous_place =  $request->previous_place4;
            $store_family__data4->reason_change_residence =  $request->reason_change_residence4;
            $store_family__data4->religion =  $request->religion4;
            $store_family__data4->asylum_status =  $request->asylum_status4;
            $store_family__data4->healthy_condition_difficulties =  $request->healthy_condition_difficulties4;
            $store_family__data4->health_insurance =  $request->health_insurance4;
            $store_family__data4->disease =  $request->disease4;
            $store_family__data4->place = $request->citizin_place4;
            $store_family__data4->periodAt_theCurrent_residenceIn_fullTime =  $request->periodAt_theCurrent_residenceIn_fullTime4;
            $store_family__data4->id = $request->id14;
            $store_family__data4->user_id = auth()->user()->id;
            $store_family__data4->save();

        }
        // There are the information of the data base family__data_learnings
//        $field_family__data_learnings = request()->validate([
//            'enroll_education' => 'required',
//            'number_of_years_schooling' => 'required',
//            'educational_major' => 'required',
//            'highest_academic_qualification' => 'required',
//            'technical_vocational_qualification' => 'required',
//
//        ]);
//        $store_family__data_learnings = new \App\family__data_learnings;
//        $store_family__data_learnings->enroll_education = $field_family__data_learnings['enroll_education'];
//        $store_family__data_learnings->id = auth()->user()->id;
//        $store_family__data_learnings->number_of_years_schooling = $field_family__data_learnings['number_of_years_schooling'];
//        $store_family__data_learnings->educational_major = $field_family__data_learnings['educational_major'];
//        $store_family__data_learnings->highest_academic_qualification = $field_family__data_learnings['highest_academic_qualification'];
//        $store_family__data_learnings->technical_vocational_qualification = $field_family__data_learnings['technical_vocational_qualification'];
//        $store_family__data_learnings->user_id = auth()->user()->id;
//        $store_family__data_learnings->save();
//
//
//        // There are the information of the data base family__data_works
//        $field_family__data_works = request()->validate([
//            'realationship_of_work' => 'required',
//            'overtime_work' => 'required',
//            'major_occupation' => 'required',
//            'major_economic_activity' => 'required',
//            'sector' => 'required',
//            'workplace' => 'required',
//            'main_practical_case' => 'required',
//            'work_contract' => 'required',
//            'vacations' => 'required',
//        ]);
//        $store_family__data_works = new \App\family__data_works;
//        $store_family__data_works->id = auth()->user()->id;
//        $store_family__data_works->realationship_of_work  = $field_family__data_works['realationship_of_work'];
//        $store_family__data_works->overtime_work = $field_family__data_works['overtime_work'];
//        $store_family__data_works->major_occupation = $field_family__data_works['major_occupation'];
//        $store_family__data_works->major_economic_activity = $field_family__data_works['major_economic_activity'];
//        $store_family__data_works->sector = $field_family__data_works['sector'];
//        $store_family__data_works->workplace = $field_family__data_works['workplace'];
//        $store_family__data_works->main_practical_case = $field_family__data_works['main_practical_case'];
//        $store_family__data_works->work_contract = $field_family__data_works['work_contract'];
//        $store_family__data_works->vacations = $field_family__data_works['vacations'];
//        $store_family__data_works->user_id = auth()->user()->id;
//        $store_family__data_works->save();
//
//
//        // There are the information of the data base family__data_marriages
//        $field_family__data_marriages = request()->validate([
//            'marriage_status' => 'required',
//            'age_first_marriage' => 'required',
//            'duration_marriage' => 'required',
//            'number_for_life_born_a_live' => 'required',
//            'number_for_life_a_live' => 'required',
//            'number_for_annual_born_a_live' => 'required',
//            'number_for_annual_a_live' => 'required',
//        ]);
//        $store_family__data_marriages = new \App\family__data_marriages;
//        $store_family__data_marriages->id = auth()->user()->id;
//        $store_family__data_marriages->marriage_status = $field_family__data_marriages['marriage_status'];
//        $store_family__data_marriages->age_first_marriage = $field_family__data_marriages['age_first_marriage'];
//        $store_family__data_marriages->duration_marriage = $field_family__data_marriages['duration_marriage'];
//        $store_family__data_marriages->number_for_life_born_a_live = $field_family__data_marriages['number_for_life_born_a_live'];
//        $store_family__data_marriages->number_for_life_a_live = $field_family__data_marriages['number_for_life_a_live'];
//        $store_family__data_marriages->number_for_annual_born_a_live = $field_family__data_marriages['number_for_annual_born_a_live'];
//        $store_family__data_marriages->number_for_annual_a_live = $field_family__data_marriages['number_for_annual_a_live'];
//        $store_family__data_marriages->user_id = auth()->user()->id;
//        $store_family__data_marriages->save();
//
//
//        // There are the information of the data base housing_datas
//        $field_housing_datas = request()->validate([
//            'Residential_unit_number' => 'required',
//            'Building_condition' => 'required',
//            'Building_counter_number' => 'required',
//            'condition_ofThe_housingUnit' => 'required',
//            'Family_number_in_the_building' => 'required',
//            'Family_number_in_the_counting_area' => 'required',
//            'Adjective_works' => 'required',
//            'Dwelling_type' => 'required',
//            'Possession_ofThe_dwelling' => 'required',
//            'Dwelling_space' => 'required',
//            'numberOfRooms' => 'required',
//            'numberOfSleepRooms' => 'required',
//            'main_ofDrink_water' => 'required',
//            'main_ofElectricity' => 'required',
//            'type_of_toilet' => 'required',
//            'waste_Disposal' => 'required',
//            'main_of_energy_for_cook' => 'required',
//            'main_of_energy_for_heat' => 'required',
//        ]);
//        $store_housing_datas = new \App\housing_datas;
//        $store_housing_datas->id = auth()->user()->id;
//        $store_housing_datas->Residential_unit_number = $field_housing_datas['Residential_unit_number'];
//        $store_housing_datas->Building_counter_number = $field_housing_datas['Building_counter_number'];
//        $store_housing_datas->Building_condition = $field_housing_datas['Building_condition'];
//        $store_housing_datas->condition_ofThe_housingUnit = $field_housing_datas['condition_ofThe_housingUnit'];
//        $store_housing_datas->Family_number_in_the_building = $field_housing_datas['Family_number_in_the_building'];
//        $store_housing_datas->Family_number_in_the_counting_area = $field_housing_datas['Family_number_in_the_counting_area'];
//        $store_housing_datas->Adjective_works = $field_housing_datas['Adjective_works'];
//        $store_housing_datas->Dwelling_type = $field_housing_datas['Dwelling_type'];
//        $store_housing_datas->Possession_ofThe_dwelling = $field_housing_datas['Possession_ofThe_dwelling'];
//        $store_housing_datas->Dwelling_space = $field_housing_datas['Dwelling_space'];
//        $store_housing_datas->numberOfRooms = $field_housing_datas['numberOfRooms'];
//        $store_housing_datas->numberOfSleepRooms = $field_housing_datas['numberOfSleepRooms'];
//        $store_housing_datas->main_ofDrink_water = $field_housing_datas['main_ofDrink_water'];
//        $store_housing_datas->main_ofElectricity = $field_housing_datas['main_ofElectricity'];
//        $store_housing_datas->type_of_toilet = $field_housing_datas['type_of_toilet'];
//        $store_housing_datas->waste_Disposal = $field_housing_datas['waste_Disposal'];
//        $store_housing_datas->main_of_energy_for_cook = $field_housing_datas['main_of_energy_for_cook'];
//        $store_housing_datas->main_of_energy_for_heat = $field_housing_datas['main_of_energy_for_heat'];
//        $store_housing_datas->user_id = auth()->user()->id;
//        $store_housing_datas->save();
//
//        // There are the information of the data base utilities_and_goods
//        $field_utilities_and_goods = request()->validate([
//            'kitchen' => 'required',
//            'bathrooms' => 'required',
//            'toilets' => 'required',
//            'bathroom_toilets' => 'required',
//            'privateCar' => 'required',
//            'cooker' => 'required',
//            'fridge' => 'required',
//            'fraser' => 'required',
//            'vacuum_cleaner' => 'required',
//            'microwave' => 'required',
//            'washing_Machine' => 'required',
//            'blotter' => 'required',
//            'dishwasher' => 'required',
//            'filter' => 'required',
//            'LCD_LED' => 'required',
//            'TV' => 'required',
//            'pichup_dish' => 'required',
//            'electric_fan' => 'required',
//            'conditioner' => 'required',
//            'central_adaptation' => 'required',
//            'central_heating' => 'required',
//            'solar_heater' => 'required',
//            'landline_telephone' => 'required',
//            'home_library' => 'required',
//        ]);
//        $find_housing_datas = \App\housing_datas::find(auth()->user()->id);
//        $store_utilities_and_goods = new \App\utilities_and_goods;
//        $store_utilities_and_goods->kitchen = $field_utilities_and_goods['kitchen'];
//        $store_utilities_and_goods->bathrooms = $field_utilities_and_goods['bathrooms'];
//        $store_utilities_and_goods->id = $find_housing_datas->Family_number_in_the_building;
//        $store_utilities_and_goods->toilets = $field_utilities_and_goods['toilets'];
//        $store_utilities_and_goods->bathroom_toilets = $field_utilities_and_goods['bathroom_toilets'];
//        $store_utilities_and_goods->privateCar = $field_utilities_and_goods['privateCar'];
//        $store_utilities_and_goods->cooker = $field_utilities_and_goods['cooker'];
//        $store_utilities_and_goods->fridge = $field_utilities_and_goods['fridge'];
//        $store_utilities_and_goods->fraser = $field_utilities_and_goods['fraser'];
//        $store_utilities_and_goods->vacuum_cleaner = $field_utilities_and_goods['vacuum_cleaner'];
//        $store_utilities_and_goods->microwave = $field_utilities_and_goods['microwave'];
//        $store_utilities_and_goods->washing_Machine = $field_utilities_and_goods['washing_Machine'];
//        $store_utilities_and_goods->blotter = $field_utilities_and_goods['blotter'];
//        $store_utilities_and_goods->dishwasher = $field_utilities_and_goods['dishwasher'];
//        $store_utilities_and_goods->filter = $field_utilities_and_goods['filter'];
//        $store_utilities_and_goods->LCD_LED = $field_utilities_and_goods['LCD_LED'];
//        $store_utilities_and_goods->TV = $field_utilities_and_goods['TV'];
//        $store_utilities_and_goods->pichup_dish = $field_utilities_and_goods['pichup_dish'];
//        $store_utilities_and_goods->electric_fan = $field_utilities_and_goods['electric_fan'];
//        $store_utilities_and_goods->conditioner = $field_utilities_and_goods['conditioner'];
//        $store_utilities_and_goods->central_adaptation = $field_utilities_and_goods['central_adaptation'];
//        $store_utilities_and_goods->central_heating = $field_utilities_and_goods['central_heating'];
//        $store_utilities_and_goods->solar_heater = $field_utilities_and_goods['solar_heater'];
//        $store_utilities_and_goods->landline_telephone = $field_utilities_and_goods['landline_telephone'];
//        $store_utilities_and_goods->home_library = $field_utilities_and_goods['home_library'];
//        $store_utilities_and_goods->user_id = auth()->user()->id;
//        $store_utilities_and_goods->save();
//
//        // There are the information of the data base information_technologies
//        $field_information_technologies = request()->validate([
//            'Palestine_internet_line' => 'required',
//            'Israel_internet_line' => 'required',
//            'Palestine_Cellular' => 'required',
//            'Israel_Cellular' => 'required',
//            'computer' => 'required',
//            'Laptop' => 'required',
//            'IPAD' => 'required',
//            'Artificial_mobile' => 'required',
//            'invedual_uses' => 'required',
//        ]);
//        $find_housing_datas = \App\housing_datas::find(auth()->user()->id);
//        $store_information_technologies = new \App\information_technologies;
//        $store_information_technologies->id = $find_housing_datas->Family_number_in_the_building;
//        $store_information_technologies->Palestine_internet_line = $field_information_technologies['Palestine_internet_line'];
//        $store_information_technologies->Israel_internet_line = $field_information_technologies['Israel_internet_line'];
//        $store_information_technologies->Palestine_Cellular = $field_information_technologies['Palestine_Cellular'];
//        $store_information_technologies->Israel_Cellular = $field_information_technologies['Israel_Cellular'];
//        $store_information_technologies->computer = $field_information_technologies['computer'];
//        $store_information_technologies->Laptop = $field_information_technologies['Laptop'];
//        $store_information_technologies->IPAD = $field_information_technologies['IPAD'];
//        $store_information_technologies->Artificial_mobile = $field_information_technologies['Artificial_mobile'];
//        $store_information_technologies->invedual_uses = $field_information_technologies['invedual_uses'];
//        $store_information_technologies->user_id = auth()->user()->id;
//        $store_information_technologies->save();
//
//        // There are the information of the data base housing_data_dead
//        $field_housing_data_dead = request()->validate([
//            'Full_name_dead' => 'required',
//            'gender' => 'required',
//            'relationship' => 'required',
//            'age' => 'required',
//            'Death_certificate' => 'required',
//            'marriage_status' => 'required',
//            'pregnant_at_time_of_death' => 'required',
//            'death_during_childbirth' => 'required',
//            'death_during_the_42_days_of_birth' => 'required',
//            'Death_due_accident' => 'required',
//        ]);
//        $find_housing_datas = \App\housing_datas::find(auth()->user()->id);
//        $store_housing_data_dead = new \App\housing_data_dead;
//        $store_housing_data_dead->Full_name_dead = $field_housing_data_dead['Full_name_dead'];
//        $store_housing_data_dead->house_id = $find_housing_datas->Family_number_in_the_building;
//        $store_housing_data_dead->gender = $field_housing_data_dead['gender'];
//        $store_housing_data_dead->relationship = $field_housing_data_dead['relationship'];
//        $store_housing_data_dead->age = $field_housing_data_dead['age'];
//        $store_housing_data_dead->Death_certificate = $field_housing_data_dead['Death_certificate'];
//        $store_housing_data_dead->marriage_status = $field_housing_data_dead['marriage_status'];
//        $store_housing_data_dead->pregnant_at_time_of_death = $field_housing_data_dead['pregnant_at_time_of_death'];
//        $store_housing_data_dead->death_during_childbirth = $field_housing_data_dead['death_during_childbirth'];
//        $store_housing_data_dead->death_during_the_42_days_of_birth = $field_housing_data_dead['death_during_the_42_days_of_birth'];
//        $store_housing_data_dead->Death_due_accident = $field_housing_data_dead['Death_due_accident'];
//        $store_housing_data_dead->user_id = auth()->user()->id;
//        $store_housing_data_dead->save();
//
//        $family_marriages = \App\family__data_marriages::find(auth()->user()->id);
//        $family_works = \App\family__data_works::find(auth()->user()->id);
//        $family_learnings = \App\family__data_learnings::find(auth()->user()->id);
//        $family = \App\family__data::find(auth()->user()->id);
//        $data = array(
//            'id' => auth()->user(),
//            'ff' => $family,
//            'ffL' => $family_learnings,
//            'family_work' => $family_works,
//            'family_marriages' => $family_marriages,
//            'housing_data' => $find_housing_datas,
//        );
        return redirect('/citizen');
    }

    public function edit($id)
    {
        $citizen = \App\family__data::findOrfail($id);

       return view('edit_citizen',compact('citizen'));
    }

    public function update(Request $request, $id)
    {
        $data = \App\family__data::findOrfail($id);
        $data ->update([
        'fullName' => $request->name,
        'relationship' =>$request->citizin_relationship,
        'gender' =>  $request->citizin_gender,
        'age' =>  $request->citizin_age,
        'nationality' =>  $request->nationality,
        'placeOfMotherTimeInvidualBirth' =>  $request->placeOfMotherTimeInvidualBirth,
        'previous_place' =>  $request->previous_place,
       'reason_change_residence' =>  $request->reason_change_residence,
        'religion' =>  $request->religion,
        'asylum_status' => $request->asylum_status,
        'healthy_condition_difficulties' =>  $request->healthy_condition_difficulties,
        'health_insurance' =>  $request->health_insurance,
        'disease' =>  $request->disease,
        'place' => $request->citizin_place,
        'periodAt_theCurrent_residenceIn_fullTime'=>  $request->periodAt_theCurrent_residenceIn_fullTime,
        'id' => $request->id,
        ]);
        $citizen = \App\family__data::findOrfail($id);
        Session::flash('updated_citizen', $request->name . ' : تم تعديله ');
        return redirect('/citizen');
        return view('edit_citizen',compact('citizen'));
    }
    public function destroy($id)
    {

        $citizen = \App\family__data::findOrfail($id);
        \App\family__data::where('id', '=', $id)->delete();
        Session::flash('deleted_citizen', $citizen->fullName . '   تم الحذف   ');
        return redirect('/citizen');
    }

}
