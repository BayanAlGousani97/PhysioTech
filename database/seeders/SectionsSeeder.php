<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $businessHour = new Section;
        $businessHour->name = ['en' => 'Business Hours', 'ar' => 'ساعات العمل'];
        $businessHour->slug = Str::slug("Business Hours");
        $businessHour->title = [
            'en' => 'We are in our center during the following times, please take care about working hours and come within these times.',
            'ar' => 'نتواجد ضمن المركز خلال الأوقات التالية، الرجاء الالتزام بساعات العمل والحضور ضمن هذه الأوقات.'];
        $businessHour->save();

        $aboutUs = new Section;
        $aboutUs->name = ['en' => 'About Us', 'ar' => 'من نحن'];
        $aboutUs->slug = Str::slug("About Us");
        $aboutUs->title = [
            'en' => 'A professional medical team provides physiotherapy and home care services',
            'ar' => 'فريق طبي مختص يقدم خدمات العلاج الطبيعي والرعاية المنزلية'];
        $aboutUs->image = ['en' => 'about-us-en.png', 'ar' => 'about-us-ar.png'];
        $aboutUs->description = [
            'en' => 'Physiotec is based on the principle of providing the highest level of medical services in the field of physiotherapy and home care for the elderly, the disabled, people with special needs, and those who cannot come to the clinic for their own reasons, through a selection of doctors and professional specialists with experience, specialization, and licensed by the Ministry of Health in the Kingdom of Saudi Arabia. where they use the latest technologies and methods to improve the quality of life for patients, help them get rid of obstacles and pain, and provide medical tools and equipment to help and train them on them. Physiotec also seeks to provide medical consultations in all specialties to solve patients\' problems. ',
            'ar' => 'فيزيوتك تقوم على مبدأ تقديم أعلى مستوى من الخدمات الطبية في مجال العلاج الطبيعي والرعاية المنزلية لكبار السن والمقعدين وذوي الاحتياجات الخاصة ومن لا يستطيعون الحضور إلى العيادة لأسبابهم الخاصة، وذلك من خلال نخبة من الأطباء و الأخصائيين المحترفين ذوي الخبرة والاختصاص والمرخصين من وزارة الصحة في المملكة العربية السعودية، حيث يستخدمون أحدث التقنيات والأساليب لتحسين جودة الحياة لدى المرضى، ومساعدتهم للتخلص من العقبات والآلام، وتأمين الأدوات والمعدات الطبي لإعانتهم وتدريبهم عليها، وأيضا تسعى فيزيوتيك لتقديم الاستشارات الطبية في جميع التخصصات لحل مشاكل المرضى. ',
        ];
        $aboutUs->save();

        $goal = new Section;
        $goal->name = ['en' => 'Our Goal', 'ar' => 'أهدافنا'];
        $goal->slug = Str::slug("Our Goal");
        $goal->title = ['en' => 'Improving patients\' quality of life and helping them', 'ar' => 'تحسين جودة حياة المرضى ومساعدتهم للتخلص من عقباتهم'];
        $goal->image = ['en' => 'our-goal-en.png', 'ar' => 'our-goal-ar.png'];
        $goal->description = [
            'en' => 'We at Physiotech are passionate about:
- Assist patients at home or in our specialist clinics.
- Securing patients\' needs for medical equipment and supplies, and training them on them.
- Patients rely on themselves and perform all functions without the need for any assistance and disposal
the pains and obstacles they face and improving their quality of life.',
            'ar' => 'نحن في فيزيوتك نعمل بشغف من أجل:
- مساعدة المرضى في المنزل أو في عياداتنا التخصصية.
- تأمين إحتياجات المرضى من التجهيزات واللوازم الطبية وتدريبهم عليها.
- إعتماد المرضى على أنفسهم والقيام بجميع الوظائف وبدون الحاجة ألية مساعدة والتخلص من
اآلالم والعقبات التي تواجههم وتحسين جودة حياتهم.',
        ];
        $goal->save();

        $mission = new Section;
        $mission->name = ['en' => 'Our Mission', 'ar' => 'رسالتنا'];
        $mission->slug = Str::slug("Our Mission");
        $mission->title = ['en' => 'Commitment to provide distinguished and integrated service', 'ar' => 'الالتزام بتقديم الخدمة المتميزة'];
        $mission->image = ['en' => 'our-mission-en.png', 'ar' => 'our-mission-ar.png'];
        $mission->description = [
            'en' => 'Commitment to providing distinguished and integrated service to patients and providing the latest technologies in the field of physiotherapy and health rehabilitation, in addition to improving the quality of life of the elderly, people with special needs and patients, providing them with special care, prescribing appropriate techniques for them, and training them on them to adapt to a healthier lifestyle. ',
            'ar' => 'الالتزام بتقديم خدمة متميزة ومتكاملة للمرضى وتقديم أحدث التقنيات في مجال العلاج الطبيعي والتأهيل الصحي، إضافة إلى تحسين جودة حياة كبار السن وذوي الاحتياجات الخاصة والمرضى، وتقديم الرعاية الخاصة لهم، وتوصيف لهم التقنيات المناسبة، وتدريبهم عليها ليتأقلموا مع أسلوب حياة أكثر صحة. ',
        ];
        $mission->save();

        $vision = new Section;
        $vision->name = ['en' => 'Our vision', 'ar' => 'رؤيتنا'];
        $vision->slug = Str::slug("Our vision");
        $vision->title = ['en' => 'A center that provides all physiotherapy services in the Kingdom of Saudi Arabia', 'ar' => 'مركز يقدم جميع خدمات العلاج الطبيعي على مستوى المملكة العربية السعودية'];
        $vision->image = ['en' => 'our-vision-en.png', 'ar' => 'our-vision-ar.png'];
        $vision->description = [
            'en' => 'To be a unique center of its kind in the Kingdom of Saudi Arabia that provides physiotherapy and rehabilitation services
For patients with honesty and credibility, as the patient deserves, in cooperation with our health care partners
Consultant doctors in all specialties to solve patients\' problems and alleviate their pain. ',
            'ar' => 'أن نكون مركز فريد من نوعه في المملكة العربية السعودية يقدم خدمات العلاج الطبيعي والتأهيل
للمرضى بكل أمانة ومصداقية وكما يستحق المريض بالتعاون مع شركائنا في الرعاية الصحية من
الأطباء الاستشاريين في جميع التخصصات لحل مشاكل المرضى والتخفيف من اآلامهم. ',
        ];
        $vision->save();


        $service = new Section;
        $service->name = ['en' => 'Our Services', 'ar' => 'خدماتنا'];
        $service->slug = Str::slug("Our Services");
        $service->title = ['en' => 'We offer many special services in physiotherapy and home care', 'ar' => 'نقدم العديد من الخدمات المميزة في العلاج الطبيعي والرعاية المنزلية'];
        $service->save();

        $doctor = new Section;
        $doctor->name = ['en' => 'Doctors', 'ar' => 'أطباؤنا'];
        $doctor->slug = Str::slug("Doctors");
        $doctor->title = ['en' => 'We have a professional group of specialists and doctors in the Kingdom', 'ar' => ' لدينا نخبة مميزة من المختصين والأطباء على مستوى المملكة'];
        $doctor->save();


        $contactUs = new Section;
        $contactUs->name = ['en' => 'Contact Us', 'ar' => 'تواصل معنا'];
        $contactUs->slug = Str::slug("Contact Us");
        $contactUs->title = ['en' => 'Feel free to send us your messages or contact us at any time', 'ar' => 'لا تتردد في إرسال رسائلك إلينا أو الاتصال بنا في أي وقت'];
        $contactUs->description = ['en' => 'You can communicate with us, send your messages, inquiries, and suggestions by writing your message below with your full name, and then click the send button, and our team will respond to you within 24 hours.',
        'ar' => 'يمكنك التواصل معنا وإرسال رسائلك واستفساراتك وتقديم الاقتراحات من خلال كتابة رسالتك أدناه مع الاسم الكامل ومن ثم الضغط على زر الإرسال، وسيقوم فريقنا بالرد عليكم خلال ٢٤ ساعة.'];
        $contactUs->image = ['en' => 'contact-us-en.png', 'ar' => 'contact-us-ar.png'];
        $contactUs->save();
    }
}
