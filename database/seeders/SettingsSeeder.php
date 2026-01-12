<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $items = [

            // Global
            ['site_title', 'Ideal Education'],
            ['site_title_full', 'Ideal Education Educare'],
            ['site_main_logo', 'admin/assets/img/logo.png'],
            ['site_fav_icon', 'admin/assets/img/favicon.png'],
            ['site_footer_logo', 'admin/assets/img/logo.png'],
            ['site_contact_image', 'admin/assets/img/logo.png'],
            ['site_information', 'Ideal Education Educare'],

            ['site_phone', '01-5907931'],
            ['site_email', 'Ideal Education@gmail.com'],
            ['site_location', 'Kathmandu, Nepal'],
            ['site_location_url', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d440.57915189381816!2d85.32309917747837!3d27.668628534399804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb193be21aea5b%3A0xaa83ef792abf1f63!2sIdeal Education%20Educare%20Consultancy!5e1!3m2!1sen!2snp!4v1744195769373!5m2!1sen!2snp'],
            ['site_mail', 'mail.Ideal Education.com.np'],
            ['site_url', '/'],

            ['site_copyright', 'Ideal Education'],

            // contact

            ['contact_title', 'Contact'],
            ['contact_image', null],

            ['contact_banner_image', null],
            ['contact_section_title', 'Get In Touch'],
            ['contact_description', 'Ideal Education'],

            ['contact_location', 'Chitwan, Kathmandu'],
            ['contact_email', 'info@Ideal Education.com'],
            ['contact_phone', '+977 9803997680'],
            ['contact_map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.0484157527694!2d85.30792607532406!3d27.715791376177723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fcf0cf3907%3A0x6ef9b1f3832b778a!2sFlyeast%20Nepal!5e0!3m2!1sen!2snp!4v1716137632306!5m2!1sen!2snp'],

            ['contact_seo_title', 'Ideal Education'],
            ['contact_seo_description', 'Ideal Education'],
            ['contact_seo_keywords', 'Ideal Education'],
            ['contact_seo_schema', 'Ideal Education'],

            ['contactform_title', 'Leave us your info'],
            ['contactform_description', 'Provide your details, and well schedule a call at your convenience.'],

            // Homepage

            ['homepage_title', 'Under the Stars:An Educational Journey'],
            ['homepage_small_title', 'Serenade Under the Stars: An Educational Journey” invites you to immerse yourself in an enchanting evening under the open sky'],
            ['homepage_image', null],
            ['homepage_description', 'Serenade Under the Stars: An Educational Journey” invites you to immerse yourself in an enchanting evening under the open sky'],

            ['home_cta_1_text', 'Get in Touch'],
            ['home_cta_1_link', '/contact-us'],
            ['home_cta_2_text', 'View Courses'],
            ['home_cta_2_link', '/our-courses'],

            ['homepage_seo_title', 'Ideal Education'],
            ['homepage_seo_keywords', 'Ideal Education'],
            ['homepage_meta_description', 'Ideal Education'],
            ['homepage_seo_schema', 'Ideal Education'],

            ['homepage_slider_cta_button', 'Get in Touch'],
            ['homepage_slider_event_button', 'Event Calendar'],

            ['universities_title', 'Our Partner Universities'],
            ['universities_subtitle', 'Dive into Excitement with Our Latest universities!'],
            ['universities_description', ''],
            ['universities_link', '/about'],
            ['universities_button', 'See All'],
            ['home_universities', ''],

            ['countries_title', 'Countries We Deal With'],
            ['countries_subtitle', 'Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.'],
            ['countries_description', 'Dive into Excitement with Our Latest countries!'],
            ['countries_link', '/about'],
            ['countries_button', 'See All'],
            ['home_countries', ''],

            ['whyChooseUs_title', 'Why Choose Us?'],
            ['whyChooseUs_subtitle', 'Our education consultants can support with excellence in guidance with education and visa consultancy in this country. We’ve been growing since 2003 with over 50 branches across 15 countries. You can enjoy a wide range of services for fulfilling your dreams to study in Australia, the UK, Canada and the US.'],
            ['whyChooseUs_description', 'Our education consultants can support with excellence in guidance with education and visa consultancy in this country. We’ve been growing since 2003 with over 50 branches across 15 countries. You can enjoy a wide range of services for fulfilling your dreams to study in Australia, the UK, Canada and the US.'],
            ['whyChooseUs_link', '/about'],
            ['whyChooseUs_button', 'See All'],

            // Homecounter
            ['home_counter_students_title', 'International Students Assisted'],
            ['home_counter_students', '10000'],
            ['home_counter_scholarship_title', 'Scholarship Approved'],
            ['home_counter_scholarship', '1000'],
            ['home_counter_enrolled_title', 'Enrolled in IELTS/PTE classes'],
            ['home_counter_enrolled', '2500'],

            ['teams_title', 'Our Teams'],
            ['teams_subtitle', 'Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.'],
            ['teams_description', 'Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.'],
            ['teams_link', '/teams'],
            ['teams_button', 'See All'],
            ['home_teams', ''],

            ['services_title', 'Our Services'],
            ['services_subtitle', 'Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.'],
            ['services_description', 'Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.'],
            ['services_link', '/services'],
            ['services_button', 'See All'],
            ['home_services', ''],

            ['aboutus_title', 'About Us'],
            ['aboutus_subtitle', 'Dive into Excitement with Our Latest aboutus!'],
            ['aboutus_description', 'Dive into Excitement with Our Latest aboutus!'],
            ['aboutus_link', '/about'],
            ['aboutus_button', 'See All'],

            ['contact_form_title', 'Interested To Join Our Classes?'],
            ['contact_form_subtitle', 'Fill the form given to book for our IELTS/PTE classes.'],
            ['contact_form_description', 'Fill the form given to book for our IELTS/PTE classes.'],

            ['courses_title', 'Our Courses'],
            ['courses_subtitle', 'Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.'],
            ['courses_description', 'Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.'],
            ['courses_link', '/courses'],
            ['courses_button', 'See All'],
            ['home_courses', ''],

            ['testioninal_title', 'Our Testimonials'],
            ['testioninal_subtitle', 'Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.'],
            ['testioninal_description', 'Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.'],
            ['testioninal_link', '/testimonals'],
            ['testioninal_button', 'See All'],
            ['home_testioninals', ''],

            ['blogs_title', 'Our Blogs'],
            ['blogs_subtitle', 'Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.'],
            ['blogs_description', 'Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.'],
            ['blogs_link', '/blogs'],
            ['blogs_button', 'See All'],
            ['home_blogs', ''],

        ];

        if (count($items)) {

            foreach ($items as $item) {

                Settings::create([
                    'key' => $item[0],
                    'value' => $item[1],
                ]);
            }
        }
    }
}
