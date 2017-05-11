<?php

namespace Drupal\suprise\Controller;
use Symfony\Component\HttpFoundation\Response;

class SupriseController
{
    public function api() {
    $glassdoor = 'http://api.glassdoor.com/api/api.htm?v=1&format=json&t.p=142977&t.k=cEGqsXg9JMY&action=employers&q=tech&userip=192.168.43.42&useragent=Mozilla/%2F4.0&action=employers';
    $result = file_get_contents($glassdoor);
    $jobs_array = json_decode($result, true);
    $companies = $jobs_array['response']["employers"];
    $company_names = '<div>';
    for($i = 0; $i<count($companies); $i++) {
    $company_name = $companies[$i]['name'];
    $company_website = $companies[$i]['website'];
    $company_industry = $companies[$i]['industry'];
    $company_overall = $companies[$i]['overallRating'];
    $cultureAndValuesRating = $companies[$i]['cultureAndValuesRating'];
    $seniorLeadershipRating = $companies[$i]['seniorLeadershipRating'];
    $compensationAndBenefitsRating = $companies[$i]['compensationAndBenefitsRating'];
    $careerOpportunitiesRating = $companies[$i]['careerOpportunitiesRating'];
    $workLifeBalanceRating = $companies[$i]['workLifeBalanceRating'];

    $company_names = $company_names . '<h1>' . $company_name . '</h1><h3>Website: ' .'<a href="http://' . $company_website.'">' . $company_website . '</a></h3><h3>Industry: ' . $company_industry . '</h3><h3>Overall Rating: ' . $company_overall . '</h3><h3>Culture and Values Rating: ' . $cultureAndValuesRating . '</h3><h3>Senior Leadership Rating: ' . $seniorLeadershipRating . '</h3><h3>Compensation and Benefits Rating: ' . $compensationAndBenefitsRating . '</h3><h3>Career Opportunities Rating: ' . $careerOpportunitiesRating . '</h3><h3>Work Life Balance Rating: ' . $workLifeBalanceRating . '</h3>';
  }
    $company_names = $company_names . '</div>';
    return new response ($company_names);
  }
}
