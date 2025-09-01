<?php

namespace Database\Seeders;

use App\Models\Pooja;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PoojaSeeder extends Seeder
{
    public function run(): void
    {
        Pooja::query()->delete();

        $poojas = [
            [
                'title' => 'Griha Pravesh Pooja',
                'title_hi' => 'गृह प्रवेश पूजा',
                'slug' => Str::slug('Griha Pravesh Pooja'),
                'description' => 'A sacred house entry ritual invoking blessings of prosperity, harmony, and divine protection.',
                'description_hi' => 'गृह प्रवेश का यह पवित्र अनुष्ठान समृद्धि, सौहार्द और दिव्य सुरक्षा का आशीर्वाद प्रदान करता है।',
                'brief_description' => "Griha Pravesh Pooja is performed when entering a new home, marking the beginning of a sacred journey in that space. It is believed that before any human inhabits the house, divine energies and the blessings of deities must be invoked so that the home radiates positivity, harmony, and growth for the family. This ritual is not only a religious tradition but also a spiritual purification of the dwelling.

During the pooja, Vastu Shanti and Ganapati invocation are performed to remove any obstacles. Fire offerings (havan) are done to sanctify every corner of the house, making it a vessel of health, wealth, and peace. The ritual brings together family members, symbolizing unity, love, and shared happiness.

📜 *Shloka 1*  
\"ॐ गृहनाथाय नमः\"  
Hindi Meaning: \"मैं गृह के स्वामी देवता को प्रणाम करता हूँ।\"  
English Meaning: \"Salutations to the presiding deity of the home.\"  
Source: Atharva Veda  

📜 *Shloka 2*  
\"ॐ गणाध्यक्षाय नमः\"  
Hindi Meaning: \"गणों के अधिपति गणेश जी को प्रणाम।\"  
English Meaning: \"Obeisance to Lord Ganesha, the remover of obstacles.\"  
Source: Rigveda  

The pooja is considered especially auspicious when done on shubh muhurat days, ensuring that the family experiences divine grace. The tradition has been preserved for centuries in Sanatana Dharma as the spiritual foundation of every household.

This ceremony creates a spiritual shield around the home, blessing not only the physical space but also the relationships and future of the family. It is a beautiful confluence of faith, culture, and divine invocation.",
                'brief_description_hi' => "गृह प्रवेश पूजा नए घर में प्रवेश के समय की जाती है और यह उस स्थान में पवित्र यात्रा की शुरुआत को दर्शाती है। माना जाता है कि घर में किसी के रहने से पहले देवताओं का आशीर्वाद और दिव्य शक्तियों का आह्वान आवश्यक है ताकि घर सकारात्मकता, सामंजस्य और परिवार के विकास का केंद्र बने। यह केवल धार्मिक परंपरा ही नहीं, बल्कि घर का आध्यात्मिक शुद्धिकरण भी है।

पूजा के दौरान वास्तु शांति और गणपति का आह्वान किया जाता है ताकि सभी बाधाएँ दूर हों। हवन के द्वारा घर के हर कोने को शुद्ध किया जाता है, जिससे स्वास्थ्य, धन और शांति का आशीर्वाद प्राप्त होता है। यह अनुष्ठान परिवार को एकजुट करता है और प्रेम, सहयोग तथा आनंद का प्रतीक बनता है।

📜 *श्लोक 1*  
\"ॐ गृहनाथाय नमः\"  
अर्थ: \"मैं गृह के स्वामी देवता को प्रणाम करता हूँ।\"  
स्रोत: अथर्ववेद  

📜 *श्लोक 2*  
\"ॐ गणाध्यक्षाय नमः\"  
अर्थ: \"गणों के अधिपति गणेश जी को प्रणाम।\"  
स्रोत: ऋग्वेद  

जब यह पूजा शुभ मुहूर्त में की जाती है तो घर और परिवार पर दिव्य कृपा बनी रहती है। सनातन धर्म में यह परंपरा सदियों से चली आ रही है और इसे हर घर की आध्यात्मिक नींव माना जाता है।

यह अनुष्ठान घर को एक आध्यात्मिक कवच प्रदान करता है, जिससे न केवल स्थान बल्कि संबंध और भविष्य भी पवित्र हो जाते हैं।",
                'price_pandit_samagri' => 1100000,
                'price_pandit_only' => 750000,
                'price_samagri_only' => 450000,
                'hero_banner_path' => 'sample-images/griha-pravesh.jpg',
            ],

            [
                'title' => 'Satyanarayan Katha',
                'title_hi' => 'सत्यनारायण कथा',
                'slug' => Str::slug('Satyanarayan Katha'),
                'description' => 'A sacred ritual dedicated to Lord Vishnu, performed for prosperity, truth, and family well-being.',
                'description_hi' => 'भगवान विष्णु को समर्पित यह पावन कथा समृद्धि, सत्य और पारिवारिक कल्याण के लिए की जाती है।',
                'brief_description' => "Satyanarayan Katha is one of the most widely performed Hindu rituals devoted to Lord Vishnu in His form as Satyanarayan, the embodiment of truth and sustenance. This ritual is usually performed after auspicious occasions such as weddings, childbirth, or during times of personal or family transitions. It signifies gratitude, devotion, and the alignment of life with the path of dharma and truth.

The Katha is recited with great devotion, narrating the stories of devotees who achieved peace, prosperity, and liberation by worshipping Satyanarayan with sincerity. Offerings of fruits, sweets, and panchamrit are made, and the ritual concludes with the distribution of prasadam, symbolizing divine grace shared among all.

📜 *Shloka 1*  
\"ॐ नमो नारायणाय\"  
Hindi Meaning: \"भगवान नारायण को नमन।\"  
English Meaning: \"Salutations to Lord Narayana.\"  
Source: Vishnu Purana  

📜 *Shloka 2*  
\"सत्यं वद, धर्मं चर\"  
Hindi Meaning: \"सत्य बोलो और धर्म का पालन करो।\"  
English Meaning: \"Speak the truth and follow righteousness.\"  
Source: Taittiriya Upanishad  

The essence of the ritual lies in cultivating truthfulness, faith, and compassion. Families believe that observing this Katha helps overcome difficulties, removes sins of the past, and ensures harmony in household life. The divine presence of Lord Vishnu is invoked to bless the devotees with long-lasting prosperity and happiness.

Satyanarayan Katha also emphasizes community togetherness as relatives, friends, and neighbors are invited to participate, listen to the story, and share the sanctified prasadam. This collective worship creates an atmosphere of unity, love, and shared spiritual growth.

The ritual carries forward a timeless message—that by living truthfully and remembering the Lord, one can conquer fear, sorrow, and worldly challenges. It is as much a spiritual discipline as it is a festival of devotion, reminding every devotee that truth (Satya) and Lord Narayan are inseparable.

When performed with a pure heart, Satyanarayan Katha transforms not just the home, but also the mind and soul of the devotee, aligning them with divine order and eternal peace.",
                'brief_description_hi' => "सत्यनारायण कथा भगवान विष्णु के सत्यनारायण स्वरूप को समर्पित सबसे लोकप्रिय अनुष्ठानों में से एक है। यह कथा प्रायः विवाह, संतान प्राप्ति या किसी विशेष शुभ अवसर पर की जाती है। यह कृतज्ञता, भक्ति और जीवन को सत्य एवं धर्म के मार्ग से जोड़ने का प्रतीक है।

कथा में भक्तिपूर्वक वे प्रसंग सुनाए जाते हैं जहाँ सत्यनारायण की पूजा से भक्तों ने शांति, समृद्धि और मोक्ष प्राप्त किया। इसमें फल, मिठाई और पंचामृत का अर्पण किया जाता है और कथा का समापन प्रसाद वितरण से होता है, जो भगवान की कृपा का प्रतीक है।

📜 *श्लोक 1*  
\"ॐ नमो नारायणाय\"  
अर्थ: \"भगवान नारायण को नमन।\"  
स्रोत: विष्णु पुराण  

📜 *श्लोक 2*  
\"सत्यं वद, धर्मं चर\"  
अर्थ: \"सत्य बोलो और धर्म का पालन करो।\"  
स्रोत: तैत्तिरीय उपनिषद  

इस कथा का सार है सत्य, आस्था और करुणा का पालन करना। माना जाता है कि इस व्रत से कठिनाइयाँ दूर होती हैं, पापों का शमन होता है और घर-परिवार में सामंजस्य आता है। भगवान विष्णु की उपस्थिति से दीर्घकालिक सुख और समृद्धि की प्राप्ति होती है।

सत्यनारायण कथा का एक विशेष पहलू यह भी है कि इसमें परिवारजन, रिश्तेदार और पड़ोसी सम्मिलित होकर कथा सुनते हैं और प्रसाद ग्रहण करते हैं। यह सामूहिक भक्ति एकता, प्रेम और आध्यात्मिक विकास का वातावरण निर्मित करती है।

यह कथा कालातीत संदेश देती है—कि सत्य और नारायण एक हैं। सत्य के पालन और ईश्वर की स्मृति से भय, दुःख और सांसारिक चुनौतियाँ समाप्त हो जाती हैं। यह अनुष्ठान जितना धार्मिक है, उतना ही आत्मिक अनुशासन और भक्ति का उत्सव भी है।

जब इसे पूर्ण श्रद्धा से किया जाता है तो यह केवल घर को ही नहीं, बल्कि मन और आत्मा को भी शुद्ध कर दिव्य शांति से जोड़ता है।",
                'price_pandit_samagri' => 900000,
                'price_pandit_only' => 600000,
                'price_samagri_only' => 400000,
                'hero_banner_path' => 'sample-images/satyanarayan.jpg',
            ],
            [
                'title' => 'SundarKand Path',
                'title_hi' => 'सुंदरकाण्ड पाठ',
                'slug' => Str::slug('SundarKand Path'),
                'description' => 'A powerful recitation from Ramcharitmanas that invokes courage, devotion, and blessings of Lord Hanuman.',
                'description_hi' => 'रामचरितमानस का यह दिव्य पाठ साहस, भक्ति और भगवान हनुमान की कृपा प्रदान करता है।',
                'brief_description' => "SundarKand Path is one of the most revered chapters of Goswami Tulsidas’ Ramcharitmanas. It narrates the heroic journey of Lord Hanuman to Lanka in search of Sita Mata and highlights his unmatched devotion, strength, and wisdom. Devotees believe that reading or listening to SundarKand brings relief from sorrows, protection from negative energies, and fulfillment of wishes.

The word 'Sundar' here symbolizes both the beauty of Hanuman’s deeds and the profound spiritual essence of this section. During the recitation, devotees are immersed in the qualities of courage, loyalty, and the power of surrendering to Lord Rama’s will. It is often performed during difficult times, as it is said to remove obstacles and restore peace in life.

📜 *Shloka 1*  
\"जय हनुमान ज्ञान गुण सागर। जय कपीस तिहुँ लोक उजागर।।\"  
Hindi Meaning: \"हे हनुमान! आप ज्ञान और गुणों के सागर हैं, तीनों लोकों में आपकी कीर्ति उजागर है।\"  
English Meaning: \"Victory to Hanuman, the ocean of wisdom and virtue, who is renowned in all three worlds.\"  
Source: Ramcharitmanas (SundarKand)  

📜 *Shloka 2*  
\"राम काज करिबे को आतुर।\"  
Hindi Meaning: \"आप सदैव भगवान राम के कार्य करने को तत्पर रहते हैं।\"  
English Meaning: \"You are ever eager to accomplish the work of Lord Rama.\"  
Source: Ramcharitmanas (SundarKand)  

The SundarKand Path is often performed collectively, filling the environment with spiritual vibrations that inspire courage and devotion. It also strengthens the faith that with Hanuman’s grace, no obstacle is insurmountable. Many families conduct this path during crises, exams, health issues, or before starting a new venture, invoking Hanuman’s strength and blessings.

The deeper message of SundarKand is surrender and service. Lord Hanuman exemplifies the highest form of bhakti—selfless service without desire for personal gain. His journey to Lanka symbolizes the journey of the soul, where challenges are overcome with devotion, strength, and divine faith.

By performing SundarKand Path with sincerity, devotees experience not only relief from worldly struggles but also inner peace and spiritual upliftment. The recitation is considered so powerful that even listening to it once brings blessings of Lord Hanuman and Lord Rama, filling life with positivity, strength, and divine protection.",
                'brief_description_hi' => "सुंदरकाण्ड गोस्वामी तुलसीदास रचित रामचरितमानस का अत्यंत पावन एवं पूजनीय अध्याय है। इसमें भगवान हनुमान की लंका यात्रा, माता सीता की खोज और उनकी अपार भक्ति, बल एवं बुद्धि का वर्णन मिलता है। भक्त मानते हैं कि सुंदरकाण्ड का पाठ दुखों से मुक्ति, नकारात्मक शक्तियों से रक्षा और मनोवांछित फल प्रदान करता है।

'सुंदर' शब्द यहाँ हनुमानजी के कार्यों की दिव्यता और इस अध्याय की गहन आध्यात्मिकता दोनों का द्योतक है। पाठ के समय साहस, निष्ठा और भगवान राम के प्रति समर्पण की भावना प्रबल होती है। इसे विशेष रूप से कठिन समय में किया जाता है, क्योंकि यह बाधाओं को दूर कर जीवन में शांति और संतुलन लाता है।

📜 *श्लोक 1*  
\"जय हनुमान ज्ञान गुण सागर। जय कपीस तिहुँ लोक उजागर।।\"  
अर्थ: \"हे हनुमान! आप ज्ञान और गुणों के सागर हैं, तीनों लोकों में आपकी कीर्ति उजागर है।\"  
स्रोत: रामचरितमानस (सुंदरकाण्ड)  

📜 *श्लोक 2*  
\"राम काज करिबे को आतुर।\"  
अर्थ: \"आप सदैव भगवान राम के कार्य करने को तत्पर रहते हैं।\"  
स्रोत: रामचरितमानस (सुंदरकाण्ड)  

सुंदरकाण्ड का सामूहिक पाठ वातावरण को पवित्र और ऊर्जावान बना देता है। यह विश्वास दिलाता है कि हनुमानजी की कृपा से कोई भी संकट असंभव नहीं है। परिवारजन इसे विशेष रूप से संकट, स्वास्थ्य समस्याओं, परीक्षा या नए कार्यारंभ के समय करवाते हैं।

सुंदरकाण्ड का गूढ़ संदेश है समर्पण और सेवा। हनुमानजी निष्काम सेवा और सर्वोच्च भक्ति के प्रतीक हैं। उनकी लंका यात्रा आत्मा की यात्रा का भी प्रतीक है, जहाँ भक्ति और शक्ति से सभी चुनौतियों पर विजय प्राप्त होती है।

भक्त जब श्रद्धा से सुंदरकाण्ड का पाठ करते हैं तो उन्हें न केवल सांसारिक कष्टों से मुक्ति मिलती है, बल्कि आंतरिक शांति और आध्यात्मिक उत्थान भी प्राप्त होता है। इसे सुनना भी हनुमान और राम की कृपा प्राप्त करने के लिए पर्याप्त माना गया है, जो जीवन को शक्ति, सकारात्मकता और दिव्य सुरक्षा से भर देता है।",
                'price_pandit_samagri' => 850000,
                'price_pandit_only' => 550000,
                'price_samagri_only' => 350000,
                'hero_banner_path' => 'sample-images/sundarkand.jpg',
            ],
            [
                'title' => 'Navagraha Pooja',
                'title_hi' => 'नवग्रह पूजा',
                'slug' => Str::slug('Navagraha Pooja'),
                'description' => 'A sacred ritual to pacify the nine planetary deities and balance cosmic energies for peace, health, and prosperity.',
                'description_hi' => 'नवग्रहों की शांति और संतुलन हेतु किया जाने वाला यह अनुष्ठान जीवन में सुख, स्वास्थ्य और समृद्धि लाता है।',
                'brief_description' => "Navagraha Pooja is a powerful Vedic ritual dedicated to the nine celestial deities—Surya (Sun), Chandra (Moon), Mangal (Mars), Budh (Mercury), Brihaspati (Jupiter), Shukra (Venus), Shani (Saturn), Rahu, and Ketu. In Vedic astrology, these planets are considered to significantly influence human life, destiny, health, relationships, and success. Performing Navagraha Pooja balances these cosmic forces and removes the malefic effects of planetary doshas.

The ritual is especially recommended during Dasha (planetary periods), when facing career setbacks, financial losses, marriage delays, health issues, or recurring obstacles. Each planet is offered specific mantras, offerings, and rituals to reduce negativity and increase positive energy. Devotees believe that Navagraha Pooja brings harmony, mental stability, spiritual upliftment, and overall prosperity.

📜 *Shloka 1*  
\"आदित्याय च सोमाय मङ्गलाय बुधाय च।  
गुरु शुक्र शनिभ्यश्च राहवे केतवे नमः।।\"  
Hindi Meaning: \"सूर्य, चंद्र, मंगल, बुध, गुरु, शुक्र, शनि, राहु और केतु – इन सभी ग्रहों को नमन है।\"  
English Meaning: \"Salutations to Surya, Chandra, Mangal, Budh, Guru, Shukra, Shani, Rahu, and Ketu.\"  
Source: Navagraha Stotram  

📜 *Shloka 2*  
\"सर्वे ग्रहाः शुभं कुर्युः सर्वे भवतु मंगलम्।\"  
Hindi Meaning: \"सभी ग्रह हमें शुभ फल प्रदान करें और सभी मंगलमय हों।\"  
English Meaning: \"May all the planets bless us with auspiciousness and may everything be harmonious.\"  
Source: Navagraha Mantra  

Navagraha Pooja is often performed before major life events like marriage, housewarming (Griha Pravesh), or starting a new venture. It strengthens favorable planetary positions and mitigates the adverse ones, creating balance in life. Priests chant mantras specific to each Graha, and offerings such as flowers, grains, and gemstones connected to each planet are placed to appease them.

The deeper essence of this ritual lies in aligning human life with cosmic rhythms. By invoking the Navagrahas, devotees attune themselves with the universe, allowing destiny to unfold with less resistance. This pooja is not just about material gains but also about attaining inner harmony and spiritual clarity.

When performed with devotion and proper Vedic rituals, Navagraha Pooja removes karmic obstacles, promotes good health, ensures career progress, improves family harmony, and blesses the devotee with peace and prosperity. It is considered one of the most comprehensive remedies in Vedic traditions, harmonizing the energies that influence every aspect of life.",
                'brief_description_hi' => "नवग्रह पूजा एक महत्वपूर्ण वैदिक अनुष्ठान है, जो सूर्य, चंद्र, मंगल, बुध, बृहस्पति, शुक्र, शनि, राहु और केतु – इन नौ ग्रहों की शांति और कृपा के लिए किया जाता है। वैदिक ज्योतिष में माना जाता है कि ये ग्रह मानव जीवन, भाग्य, स्वास्थ्य, संबंध और सफलता को गहराई से प्रभावित करते हैं। नवग्रह पूजा करने से इन शक्तियों का संतुलन होता है और ग्रह दोषों का निवारण होता है।

यह अनुष्ठान विशेष रूप से दशा/अंतरदशा के समय, करियर में बाधा, आर्थिक हानि, विवाह में विलंब, स्वास्थ्य समस्या या जीवन में बार-बार आने वाली अड़चनों के दौरान करने की सलाह दी जाती है। प्रत्येक ग्रह को विशेष मंत्र, सामग्री और अर्पण से प्रसन्न किया जाता है। भक्त मानते हैं कि इससे मानसिक शांति, आध्यात्मिक उन्नति और समृद्धि प्राप्त होती है।

📜 *श्लोक 1*  
\"आदित्याय च सोमाय मङ्गलाय बुधाय च।  
गुरु शुक्र शनिभ्यश्च राहवे केतवे नमः।।\"  
अर्थ: \"सूर्य, चंद्र, मंगल, बुध, गुरु, शुक्र, शनि, राहु और केतु – इन सभी ग्रहों को नमन है।\"  
स्रोत: नवग्रह स्तोत्र  

📜 *श्लोक 2*  
\"सर्वे ग्रहाः शुभं कुर्युः सर्वे भवतु मंगलम्।\"  
अर्थ: \"सभी ग्रह हमें शुभ फल प्रदान करें और सभी मंगलमय हों।\"  
स्रोत: नवग्रह मंत्र  

नवग्रह पूजा अक्सर विवाह, गृह प्रवेश या किसी नए कार्यारंभ से पहले की जाती है। यह शुभ ग्रह स्थितियों को और प्रबल बनाती है तथा अशुभ प्रभावों को शांत करती है। इसमें प्रत्येक ग्रह को उसकी विशेष सामग्री जैसे पुष्प, अनाज और रत्न अर्पित किए जाते हैं।

इस अनुष्ठान का गहरा अर्थ है – मानव जीवन को ब्रह्मांडीय ऊर्जा के साथ संतुलित करना। जब भक्त नवग्रहों का आह्वान करते हैं तो वे स्वयं को ब्रह्मांड की गति के साथ जोड़ते हैं, जिससे जीवन का प्रवाह सहज हो जाता है।  

भक्ति और शास्त्रोक्त विधि से नवग्रह पूजा करने पर जीवन से बाधाएँ दूर होती हैं, स्वास्थ्य उत्तम रहता है, करियर में उन्नति मिलती है, परिवार में सौहार्द बढ़ता है और जीवन सुख-समृद्धि से भर जाता है। यह वैदिक परंपरा में सबसे व्यापक और प्रभावी उपायों में से एक मानी जाती है।",
                'price_pandit_samagri' => 1100000,
                'price_pandit_only' => 750000,
                'price_samagri_only' => 400000,
                'hero_banner_path' => 'sample-images/navagrah.jpg',
            ],
            [
                'title' => 'Akhand Ramayan Path',
                'title_hi' => 'अखंड रामायण पाठ',
                'slug' => Str::slug('Akhand Ramayan Path'),
                'description' => 'A continuous recitation of the entire Ramcharitmanas, invoking Lord Rama’s divine blessings for harmony, protection, and prosperity.',
                'description_hi' => 'पूरे रामचरितमानस का अखंड पाठ, जो भगवान श्रीराम की कृपा से जीवन में शांति, संरक्षण और समृद्धि लाता है।',
                'brief_description' => "Akhand Ramayan Path is a sacred ritual where the entire *Ramcharitmanas* (composed by Goswami Tulsidas) is recited continuously without any interruption, usually over a period of 24 hours. This path is performed with deep devotion to Lord Rama, Sita, Lakshmana, and Hanuman, invoking divine blessings for family harmony, protection from negative energies, and fulfillment of desires.

The recitation covers all *kands* (Bala Kand, Ayodhya Kand, Aranya Kand, Kishkindha Kand, Sundar Kand, Lanka Kand, Uttar Kand), narrating the divine story of Lord Rama’s life, virtues, and victory of dharma over adharma. Families and communities often perform this ritual on auspicious occasions such as marriages, housewarmings, anniversaries, or before starting new ventures.

📜 *Shloka 1*  
\"श्रीरामचन्द्र कृपालु भजु मन हरण भवभय दारुणम्।  
नवकंज लोचन कंजमुख कर कंज पद कंजारुणम्।।\"  
Hindi Meaning: \"हे मन! श्रीरामचन्द्र का भजन करो, जो करुणामय हैं, जो जन्म-मृत्यु के भय को हरने वाले हैं। जिनकी आँखें, मुख, कर और चरण सब कमल के समान सुंदर हैं।\"  
English Meaning: \"O mind, worship Lord Ramachandra, the compassionate one, who removes the fear of worldly existence, whose eyes, face, hands, and feet are like red lotuses.\"  
Source: Ramcharitmanas (Bal Kand)  

📜 *Shloka 2*  
\"राम नाम बड़ भाग्य बडाई। मिलहि न संतन कर परिनाई।।\"  
Hindi Meaning: \"राम नाम का स्मरण बड़ा सौभाग्य है, जो केवल संतों की संगति से मिलता है।\"  
English Meaning: \"Chanting the name of Rama is supreme fortune, which is attained through the company of saints.\"  
Source: Ramcharitmanas (Ayodhya Kand)  

The significance of Akhand Ramayan Path lies in the vibrations created by the uninterrupted chanting of the Ramcharitmanas. It is said to purify the surroundings, destroy negative energies, and fill the home with peace and devotion. Families believe that organizing this path removes obstacles, ensures family unity, and blesses generations with Rama’s grace.

Spiritually, Akhand Ramayan strengthens devotion (*bhakti*), teaches moral values, and inspires the qualities of truth, humility, and righteousness. It is also believed that Lord Rama himself resides wherever the Ramayan is recited with faith and devotion.

The ritual is conducted by priests and devotees who take turns in the recitation, accompanied by bhajans, kirtans, and Ramcharitmanas aarti. At the conclusion, Ram aarti and havan (fire ritual) are performed, marking the completion of the path with divine energy and blessings for all attendees.

Performing Akhand Ramayan Path ensures protection, peace, prosperity, and spiritual growth. It is regarded as one of the most powerful and auspicious rituals to invite Lord Rama’s presence and blessings into one’s life.",
                'brief_description_hi' => "अखंड रामायण पाठ एक अत्यंत पवित्र अनुष्ठान है, जिसमें *गोस्वामी तुलसीदासजी* रचित पूरे *रामचरितमानस* का निरंतर और अखंड पाठ किया जाता है। यह पाठ सामान्यतः 24 घंटे में संपन्न होता है और इसमें भगवान श्रीराम, माता सीता, लक्ष्मणजी और हनुमानजी का स्मरण कर divine कृपा प्राप्त की जाती है।  

पाठ में सभी *कांड* (बालकांड, अयोध्याकांड, अरण्यकांड, किष्किन्धाकांड, सुंदरकांड, लंकाकांड, उत्तरकांड) सम्मिलित होते हैं, जो भगवान श्रीराम के जीवन, आदर्श और धर्म की विजय का वर्णन करते हैं। यह अनुष्ठान प्रायः विवाह, गृह प्रवेश, वर्षगाँठ या किसी शुभ कार्य से पहले किया जाता है।  

📜 *श्लोक 1*  
\"श्रीरामचन्द्र कृपालु भजु मन हरण भवभय दारुणम्।  
नवकंज लोचन कंजमुख कर कंज पद कंजारुणम्।।\"  
अर्थ: \"हे मन! श्रीरामचन्द्र का भजन करो, जो करुणामय हैं और जो जन्म-मृत्यु के भय को हर लेते हैं।\"  
स्रोत: रामचरितमानस (बालकांड)  

📜 *श्लोक 2*  
\"राम नाम बड़ भाग्य बडाई। मिलहि न संतन कर परिनाई।।\"  
अर्थ: \"राम नाम का स्मरण बड़ा सौभाग्य है और यह केवल संतों की संगति से मिलता है।\"  
स्रोत: रामचरितमानस (अयोध्याकांड)  

अखंड रामायण पाठ से उत्पन्न दिव्य ध्वनि वातावरण को शुद्ध करती है, नकारात्मक शक्तियों को नष्ट करती है और घर-परिवार में शांति, सौहार्द और भक्ति का संचार करती है। माना जाता है कि इस पाठ से समस्त बाधाएँ दूर होती हैं, परिवार में एकता आती है और श्रीराम की कृपा पीढ़ी-दर-पीढ़ी बनी रहती है।  

आध्यात्मिक दृष्टि से यह पाठ भक्तिभाव को प्रगाढ़ करता है, धर्म और सत्य का पालन करने की प्रेरणा देता है और जीवन में नम्रता व आदर्श स्थापित करता है।  

पाठ के अंत में रामआरती और हवन किया जाता है, जिससे पूरे वातावरण में दिव्य ऊर्जा का संचार होता है और उपस्थित सभी जनों को भगवान श्रीराम का आशीर्वाद प्राप्त होता है।  

अखंड रामायण पाठ करने से परिवार में सुख-समृद्धि, शांति और आध्यात्मिक उन्नति सुनिश्चित होती है। यह भगवान श्रीराम की कृपा प्राप्त करने का अत्यंत प्रभावशाली और मंगलकारी साधन है।",
                'price_pandit_samagri' => 1200000,
                'price_pandit_only' => 800000,
                'price_samagri_only' => 450000,
                'hero_banner_path' => 'sample-images/akhand-ramayan.jpg',
            ],

            [
                'title' => 'Kaal Sarp Dosh Pooja',
                'title_hi' => 'कालसर्प दोष पूजा',
                'slug' => Str::slug('Kaal Sarp Dosh Pooja'),
                'description' => 'A powerful Vedic ritual performed to reduce the malefic effects of Kaal Sarp Yog in one’s horoscope, ensuring relief from obstacles, health issues, and misfortunes.',
                'description_hi' => 'कालसर्प योग के अशुभ प्रभावों को कम करने और जीवन से बाधाएँ, दुःख एवं दुर्भाग्य दूर करने हेतु की जाने वाली शक्तिशाली वैदिक पूजा।',
                'brief_description' => "Kaal Sarp Dosh Pooja is a remedial ritual performed to pacify the ill effects of *Kaal Sarp Yog*, a dosh that occurs in one’s horoscope when all planets are positioned between Rahu and Ketu. This planetary alignment is believed to create hurdles in career, health, relationships, and overall growth.

The ritual is usually performed at sacred places like *Trimbakeshwar (Nashik)*, *Ujjain*, or *Kashi*, under the guidance of expert Vedic priests. It involves the chanting of specific mantras, worship of Lord Shiva, Rahu-Ketu Shanti, and offerings to Nag Devta. The pooja helps in removing past life karmic influences and grants peace, stability, and prosperity.

📜 *Shloka 1*  
\"ॐ त्र्यम्बकं यजामहे सुगन्धिं पुष्टिवर्धनम्।  
उर्वारुकमिव बन्धनान्मृत्योर्मुक्षीय मामृतात्।।\"  
(महामृत्युञ्जय मंत्र)  
Meaning: \"We worship Lord Shiva, the three-eyed one, who nourishes all beings. May He liberate us from the bondage of death, just as a cucumber is severed from its stalk.\"  

📜 *Shloka 2*  
\"ॐ राहवे नमः। ॐ केतवे नमः।\"  
Meaning: \"Salutations to Rahu and Ketu, may they be pacified and bestow positive energy.\"  

### Significance:  
Kaal Sarp Dosh is considered highly inauspicious in Vedic astrology. It may cause delays, chronic health problems, marital disharmony, unstable career, or sudden obstacles. The pooja neutralizes the negative influence of Rahu-Ketu and strengthens the positive planets in the chart.

### Benefits of Kaal Sarp Dosh Pooja:  
- Removes hurdles in career, marriage, and finances.  
- Reduces health issues, mental stress, and fear.  
- Pacifies Rahu-Ketu and Nag Devta.  
- Grants harmony, peace, and spiritual growth.  
- Protects from sudden accidents, misfortunes, and negative energies.  

### Ritual Procedure:  
1. Sankalp (oath/intention) by the devotee.  
2. Worship of Lord Ganesha for obstacle removal.  
3. Rahu-Ketu Shanti and Nag Devta Puja.  
4. Recitation of *Mahamrityunjaya Mantra* 108 times.  
5. Havan (fire ritual) with offerings.  
6. Final aarti and blessings from the pandit.  

Kaal Sarp Dosh Pooja is a powerful astrological remedy that provides relief from doshas, ensures peace of mind, and brings stability and prosperity in life. It is highly recommended for those facing unexplained problems or repeated setbacks despite efforts.",
                'brief_description_hi' => "कालसर्प दोष पूजा एक विशेष वैदिक अनुष्ठान है जो जन्मकुंडली में *कालसर्प योग* के दुष्प्रभावों को शांत करने हेतु किया जाता है। जब राहु और केतु के बीच सभी ग्रह आ जाते हैं तो कालसर्प दोष बनता है, जो जीवन में बाधाएँ, स्वास्थ्य समस्याएँ, वैवाहिक कलह और असफलताएँ उत्पन्न करता है।  

यह पूजा प्रायः *त्र्यंबकेश्वर (नासिक)*, *उज्जैन* या *काशी* जैसे पवित्र स्थलों पर विशेषज्ञ पंडितों द्वारा की जाती है। इसमें भगवान शिव की उपासना, राहु-केतु शांति, नाग देवता का पूजन और महामृत्युंजय जप शामिल होता है।  

📜 *श्लोक 1*  
\"ॐ त्र्यम्बकं यजामहे सुगन्धिं पुष्टिवर्धनम्।  
उर्वारुकमिव बन्धनान्मृत्योर्मुक्षीय मामृतात्।।\"  
(महामृत्युंजय मंत्र)  
अर्थ: \"हम भगवान त्रिनेत्र शिव की आराधना करते हैं, जो सभी को पुष्ट करते हैं। वे हमें मृत्यु के बंधन से मुक्त करें जैसे खरबूजा डंठल से अलग हो जाता है।\"  

📜 *श्लोक 2*  
\"ॐ राहवे नमः। ॐ केतवे नमः।\"  
अर्थ: \"राहु और केतु को प्रणाम, वे शांत हों और सकारात्मक ऊर्जा प्रदान करें।\"  

### महत्व:  
कालसर्प दोष अत्यंत अशुभ माना जाता है। यह विवाह, करियर, स्वास्थ्य और जीवन में विलंब और कठिनाई लाता है। पूजा से राहु-केतु शांत होते हैं और सकारात्मक ग्रहों का प्रभाव बढ़ता है।  

### लाभ:  
- करियर, विवाह और आर्थिक बाधाएँ दूर होती हैं।  
- स्वास्थ्य समस्याएँ और मानसिक तनाव कम होता है।  
- राहु-केतु और नाग देवता प्रसन्न होते हैं।  
- शांति, सौहार्द और आध्यात्मिक उन्नति मिलती है।  
- दुर्घटनाओं, दुर्भाग्य और नकारात्मक ऊर्जा से रक्षा होती है।  

### विधि:  
1. संकल्प (भक्त का संकल्प लेना)  
2. गणेश पूजन  
3. राहु-केतु शांति एवं नाग देवता पूजन  
4. महामृत्युंजय मंत्र का 108 बार जप  
5. हवन एवं आहुति  
6. आरती एवं आशीर्वाद  

यह पूजा जीवन से अनचाही बाधाएँ दूर कर स्थिरता, समृद्धि और शांति प्रदान करती है।",
                'price_pandit_samagri' => 210000,
                'price_pandit_only' => 150000,
                'price_samagri_only' => 90000,
                'hero_banner_path' => 'sample-images/kaal-sarp-dosh.jpg',
            ],
            [
                'title' => 'Shodash Matrika Pooja',
                'title_hi' => 'षोडश मातृका पूजा',
                'slug' => Str::slug('Shodash Matrika Pooja'),
                'description' => 'A sacred Vedic ritual dedicated to the 16 forms of Divine Mother (Matrikas), performed to attain blessings of protection, health, progeny, prosperity, and removal of planetary afflictions.',
                'description_hi' => 'देवी मातृका के 16 रूपों को समर्पित पवित्र वैदिक अनुष्ठान, जो संतति सुख, स्वास्थ्य, समृद्धि और ग्रहदोष निवारण हेतु किया जाता है।',
                'brief_description' => "The Shodash Matrika Pooja is a highly revered ritual dedicated to the *16 divine mothers (Matrikas)* — powerful manifestations of Shakti. These 16 goddesses are worshipped together to invoke their blessings for health, protection, fertility, peace, and overall prosperity.  

The Matrikas include: Brahmi, Maheshwari, Kaumari, Vaishnavi, Varahi, Indrani, Chamunda, Lakshmi, Saraswati, Durga, Kali, Savitri, Ratri, Jaya, Vijaya, and Aditi (or other regional variations).  

This pooja is performed especially by families wishing for healthy progeny, removal of planetary afflictions (graha doshas), or protection from negative energies.  

📜 *Shloka 1*  
\"या देवी सर्वभूतेषु मातृरूपेण संस्थिता।  
नमस्तस्यै नमस्तस्यै नमस्तस्यै नमो नमः।।\"  
Meaning: \"Salutations again and again to the Goddess who resides in all beings as the motherly force.\"  

📜 *Shloka 2*  
\"ॐ मातृभ्यः नमः।\"  
Meaning: \"Salutations to the Divine Mothers.\"  

### Significance:  
The Matrikas are considered the guardians of directions and protectors against evil. Worshipping them ensures balance in life, fertility, protection of children, and removal of diseases and misfortunes.  

### Benefits of Shodash Matrika Pooja:  
- Ensures good health, vitality, and protection from diseases.  
- Blesses couples with progeny and healthy children.  
- Neutralizes malefic effects of planetary doshas.  
- Protects against negative forces and black magic.  
- Grants prosperity, peace, and harmony in family life.  

### Ritual Procedure:  
1. Sankalp (intention by devotee).  
2. Invocation of Lord Ganesha for obstacle removal.  
3. Kalash sthapana & Navagraha Pooja.  
4. Invocation of 16 Matrikas with mantra chanting.  
5. Recitation of *Devi Mahatmyam* / *Durga Saptashati*.  
6. Havan with specific mantras for Matrikas.  
7. Aarti and blessings distribution (prasadam).  

This pooja brings divine feminine energy into the devotee’s life, harmonizing the environment, removing negative karmas, and ensuring health, prosperity, and protection.",
                'brief_description_hi' => "षोडश मातृका पूजा *माँ शक्ति* के 16 रूपों की आराधना है। इन मातृकाओं में ब्रह्मी, महेश्वरी, कौमारी, वैष्णवी, वाराही, इंद्राणी, चामुंडा, लक्ष्मी, सरस्वती, दुर्गा, काली, सावित्री, रात्रि, जया, विजय और अदिति (या क्षेत्रीय स्वरूप) सम्मिलित हैं।  

यह पूजा विशेष रूप से संतान सुख, स्वास्थ्य लाभ, रोग निवारण, ग्रहदोष शांति और नकारात्मक शक्तियों से रक्षा हेतु की जाती है।  

📜 *श्लोक 1*  
\"या देवी सर्वभूतेषु मातृरूपेण संस्थिता।  
नमस्तस्यै नमस्तस्यै नमस्तस्यै नमो नमः।।\"  
अर्थ: \"जो देवी सब प्राणियों में माता के रूप में स्थित हैं, उनको बार-बार नमस्कार है।\"  

📜 *श्लोक 2*  
\"ॐ मातृभ्यः नमः।\"  
अर्थ: \"मातृ शक्तियों को नमन।\"  

### महत्व:  
मातृकाएँ दिशाओं की रक्षक और दुष्ट शक्तियों से बचाने वाली मानी जाती हैं। इनकी पूजा से जीवन में संतुलन, संतान सुख, रोग निवारण और समृद्धि प्राप्त होती है।  

### लाभ:  
- स्वास्थ्य, बल और रोगों से रक्षा।  
- संतान सुख और बच्चों की सुरक्षा।  
- ग्रहदोष और पाप प्रभाव का शमन।  
- नकारात्मक शक्तियों एवं तंत्र-मंत्र से रक्षा।  
- घर में शांति, सौभाग्य और समृद्धि।  

### विधि:  
1. संकल्प एवं गणेश पूजन।  
2. कलश स्थापना एवं नवग्रह पूजन।  
3. षोडश मातृकाओं का आवाहन एवं मंत्र जाप।  
4. *देवी माहात्म्य / दुर्गा सप्तशती* पाठ।  
5. हवन एवं आहुति।  
6. आरती एवं प्रसाद वितरण।  

यह पूजा दिव्य मातृशक्ति को जीवन में स्थापित कर स्वास्थ्य, समृद्धि और संतति सुख प्रदान करती है।",
                'price_pandit_samagri' => 160000,
                'price_pandit_only' => 120000,
                'price_samagri_only' => 80000,
                'hero_banner_path' => 'sample-images/shodash-matrika.jpg',
            ],
            [
                'title' => 'Shivarchan Pooja',
                'title_hi' => 'शिवार्चन पूजा',
                'slug' => Str::slug('Shivarchan Pooja'),
                'description' => 'A sacred ritual of worshipping Lord Shiva through abhishekam, offerings, and mantras to attain peace, prosperity, health, and liberation from sins.',
                'description_hi' => 'भगवान शिव को अभिषेक, अर्पण और मंत्रजप के माध्यम से समर्पित पवित्र अनुष्ठान, जो शांति, समृद्धि, स्वास्थ्य और पाप मुक्ति के लिए किया जाता है।',
                'brief_description' => "The Shivarchan Pooja is a deeply devotional ritual dedicated to Lord Shiva — the Supreme Deity who represents destruction of negativity and bestower of liberation (moksha). The worship is performed with sacred offerings like water, milk, honey, ghee, bilva leaves, flowers, and chanting of Vedic mantras.  

This pooja is especially significant during Mondays, Pradosh vrat, Shravan Maas, and Mahashivratri, though it can be performed on any auspicious day for peace, protection, and blessings.  

📜 *Shloka 1*  
\"ॐ नमः शिवाय\"  
Meaning: \"Salutations to Lord Shiva, the auspicious one.\"  

📜 *Shloka 2*  
\"त्र्यम्बकं यजामहे सुगन्धिं पुष्टिवर्धनम्।  
उर्वारुकमिव बन्धनान् मृत्योर्मुक्षीय मामृतात्।।\"  
Meaning: \"We worship the three-eyed Lord Shiva who nourishes all beings. May He liberate us from the bondage of worldly attachments and death, granting us immortality.\"  

### Significance:  
Shivarchan symbolizes surrender to Lord Shiva, seeking forgiveness for sins, and invoking his grace for prosperity, family welfare, and spiritual upliftment. Worship of Shiva with bilva leaves and abhishekam is believed to remove karmic obstacles.  

### Benefits of Shivarchan Pooja:  
- Grants peace of mind and removes stress.  
- Bestows health, wealth, and family harmony.  
- Eliminates negative karmas and purifies the soul.  
- Protects from evil influences, diseases, and untimely death.  
- Blesses the devotee with wisdom, devotion, and moksha (liberation).  

### Ritual Procedure:  
1. Sankalp (intention and prayer).  
2. Ganesh Pooja for obstacle removal.  
3. Kalash sthapana and purification.  
4. Abhishekam of Shiva Linga with water, milk, curd, honey, ghee, sugar.  
5. Offering of bilva leaves, flowers, dhatura, sandalwood paste.  
6. Chanting of *Om Namah Shivaya* and *Mahamrityunjaya Mantra*.  
7. Aarti and distribution of prasadam.  

This pooja is a gateway to divine blessings of Lord Shiva, removing worldly suffering and granting spiritual enlightenment.",
                'brief_description_hi' => "शिवार्चन पूजा भगवान शिव को समर्पित एक पवित्र अनुष्ठान है। इसमें शिवलिंग का जल, दूध, दही, घी, मधु, बेलपत्र, धतूरा, पुष्प और मंत्रजप के साथ पूजन किया जाता है।  

यह पूजा विशेष रूप से सोमवार, प्रदोष व्रत, श्रावण मास और महाशिवरात्रि पर अत्यंत फलदायी होती है। इसे किसी भी शुभ दिन पर शांति, समृद्धि और रक्षा हेतु किया जा सकता है।  

📜 *श्लोक 1*  
\"ॐ नमः शिवाय\"  
अर्थ: \"शुभ के स्वरूप भगवान शिव को नमन।\"  

📜 *श्लोक 2*  
\"त्र्यम्बकं यजामहे सुगन्धिं पुष्टिवर्धनम्।  
उर्वारुकमिव बन्धनान् मृत्योर्मुक्षीय मामृतात्।।\"  
अर्थ: \"हम त्रिनेत्रधारी भगवान शिव की उपासना करते हैं। वे हमें मृत्यु और बंधनों से मुक्त करके अमृतत्व प्रदान करें।\"  

### महत्व:  
शिवार्चन पापों का शमन, समृद्धि की प्राप्ति और मोक्ष का मार्ग प्रशस्त करता है। बेलपत्र और अभिषेक से किया गया शिव पूजन विशेष रूप से अत्यंत शुभ माना जाता है।  

### लाभ:  
- मानसिक शांति और तनाव मुक्ति।  
- स्वास्थ्य, धन और पारिवारिक सुख।  
- पाप नाश और आत्मा की शुद्धि।  
- रोग, शत्रु और अकाल मृत्यु से रक्षा।  
- भक्ति, विवेक और मोक्ष की प्राप्ति।  

### विधि:  
1. संकल्प और गणेश पूजन।  
2. कलश स्थापना एवं शुद्धिकरण।  
3. जल, दूध, दही, घी, मधु, शक्कर से शिवलिंग अभिषेक।  
4. बेलपत्र, पुष्प, धतूरा, चंदन अर्पण।  
5. *ॐ नमः शिवाय* और *महामृत्युंजय मंत्र* का जप।  
6. आरती एवं प्रसाद वितरण।  

यह पूजा भगवान शिव की दिव्य कृपा का मार्ग खोलती है, जिससे दुख दूर होकर भक्ति और मोक्ष की प्राप्ति होती है।",
                'price_pandit_samagri' => 60000,
                'price_pandit_only' => 40000,
                'price_samagri_only' => 25000,
                'hero_banner_path' => 'sample-images/shivarchan.jpg',
            ],
            [
                'title' => 'Mul Shanti Pooja',
                'title_hi' => 'मूल शांति पूजा',
                'slug' => Str::slug('Mul Shanti Pooja'),
                'description' => 'A powerful ritual performed for individuals born under certain nakshatras to remove doshas, pacify planetary influences, and bring peace, prosperity, and health.',
                'description_hi' => 'यह विशेष पूजा उन जातकों के लिए की जाती है जिनका जन्म कुछ विशेष नक्षत्रों में हुआ है, जिससे दोषों का निवारण, ग्रह शांति और जीवन में सुख-समृद्धि आती है।',
                'brief_description' => "Mul Shanti Pooja is a significant Vedic ritual performed for children or individuals born in *Mool Nakshatra* (Ashwini, Ashlesha, Magha, Jyeshtha, Moola, Revati, etc.) or when specific planetary positions create doshas in the birth chart. According to astrology, such births are considered sensitive and may bring difficulties for the child and family unless proper remedies are performed.  

The pooja is carried out to pacify the planetary deities and seek blessings for health, long life, and prosperity. By invoking divine energies through mantras, homa, and offerings, the negative influences of nakshatra doshas are neutralized.  

📜 *Shloka 1*  
\"ॐ त्र्यम्बकं यजामहे सुगन्धिं पुष्टिवर्धनम्।  
उर्वारुकमिव बन्धनान् मृत्योर्मुक्षीय मामृतात्।।\"  
Meaning: \"We worship the three-eyed Lord Shiva, who nourishes all beings. May He liberate us from bondage and grant immortality.\"  

📜 *Shloka 2*  
\"ॐ शांति: शांति: शांति:\"  
Meaning: \"May peace prevail in the body, mind, and soul.\"  

### Significance:  
Mul Shanti Pooja holds deep importance for reducing the malefic effects of nakshatra doshas. It is generally recommended to perform this pooja after birth or at the completion of one year, though it can be performed later as well. This ensures protection, removes obstacles, and grants blessings of peace and harmony to the family.  

### Benefits of Mul Shanti Pooja:  
- Pacifies negative planetary and nakshatra influences.  
- Protects the child and family from health issues, obstacles, and misfortunes.  
- Ensures longevity, prosperity, and overall well-being.  
- Brings harmony and peace within family relationships.  
- Strengthens spiritual growth and removes karmic hurdles.  

### Ritual Procedure:  
1. Sankalp and invocation of deities.  
2. Ganesh Pooja for obstacle removal.  
3. Kalash sthapana and purification rituals.  
4. Navagraha and Nakshatra Shanti homa.  
5. Recitation of mantras for the concerned nakshatra and deities.  
6. Offering of havan samagri, ghee, and herbs into the sacred fire.  
7. Aarti and blessings for the child/family.  

This sacred pooja ensures peace, divine blessings, and stability in life by reducing the impact of nakshatra doshas.",
                'brief_description_hi' => "मूल शांति पूजा विशेष रूप से उन जातकों के लिए की जाती है जिनका जन्म *मूल नक्षत्र* (अश्विनी, अश्लेषा, मघा, ज्येष्ठा, मूल, रेवती आदि) या अन्य संवेदनशील नक्षत्रों में होता है। ज्योतिष के अनुसार ऐसे जन्म में दोष हो सकते हैं जो जातक और परिवार के लिए कठिनाइयाँ ला सकते हैं। इस पूजा से इन दोषों का निवारण होता है।  

यह अनुष्ठान ग्रह-नक्षत्रों को शांत करके स्वास्थ्य, दीर्घायु और समृद्धि का आशीर्वाद दिलाता है। मंत्रजप, हवन और अर्पण से नकारात्मक प्रभाव दूर होते हैं और परिवार को शांति प्राप्त होती है।  

📜 *श्लोक 1*  
\"ॐ त्र्यम्बकं यजामहे सुगन्धिं पुष्टिवर्धनम्।  
उर्वारुकमिव बन्धनान् मृत्योर्मुक्षीय मामृतात्।।\"  
अर्थ: \"हम त्रिनेत्रधारी भगवान शिव की उपासना करते हैं। वे हमें बंधनों और मृत्यु से मुक्त करके अमरत्व प्रदान करें।\"  

📜 *श्लोक 2*  
\"ॐ शांति: शांति: शांति:\"  
अर्थ: \"शरीर, मन और आत्मा में शांति स्थापित हो।\"  

### महत्व:  
मूल शांति पूजा जन्मकुंडली में मौजूद नक्षत्र दोषों को शांत करने हेतु अत्यंत आवश्यक है। इसे जन्म के तुरंत बाद या एक वर्ष पूर्ण होने पर करना सर्वोत्तम माना गया है। इससे परिवार पर नकारात्मक प्रभाव नहीं पड़ता और जीवन में शांति आती है।  

### लाभ:  
- ग्रह-नक्षत्रों के दुष्प्रभाव शांत होते हैं।  
- बच्चे और परिवार की रक्षा होती है।  
- स्वास्थ्य, दीर्घायु और समृद्धि प्राप्त होती है।  
- पारिवारिक संबंधों में सामंजस्य आता है।  
- आध्यात्मिक उन्नति और पापों का शमन होता है।  

### विधि:  
1. संकल्प और देवताओं का आह्वान।  
2. गणेश पूजन।  
3. कलश स्थापना और शुद्धिकरण।  
4. नवग्रह और नक्षत्र शांति हवन।  
5. संबंधित नक्षत्र और देवताओं के मंत्रों का जप।  
6. हवन सामग्री, घी और औषधियों का अर्पण।  
7. आरती और आशीर्वाद।  

यह पूजा दोष निवारण का साधन है और जीवन में शांति, स्थिरता और दिव्य कृपा का मार्ग प्रशस्त करती है।",
                'price_pandit_samagri' => 65000,
                'price_pandit_only' => 45000,
                'price_samagri_only' => 28000,
                'hero_banner_path' => 'sample-images/mul-shanti.jpg',
            ],
            [
                'title' => 'Bhoomi Poojan',
                'title_hi' => 'भूमि पूजन',
                'slug' => Str::slug('Bhoomi Poojan'),
                'description' => 'A sacred ritual performed before starting construction or laying the foundation of a new building to seek blessings from Mother Earth and Vastu Purusha.',
                'description_hi' => 'किसी भी भवन, घर या कार्यालय के निर्माण कार्य की शुरुआत से पहले भूमि पूजन किया जाता है ताकि माता पृथ्वी और वास्तु पुरुष की कृपा प्राप्त हो।',
                'brief_description' => "Bhoomi Poojan, also known as *Bhumi Shuddhi* or *Foundation Ritual*, is a highly auspicious Vedic ceremony performed before beginning construction work, laying foundation stones, or starting agricultural activities. The earth is considered a divine mother, and this ritual seeks her permission and blessings for stability, prosperity, and harmony.  

The pooja also invokes *Vastu Purusha*, the deity of directions, ensuring balance and removal of doshas that may cause obstacles in construction or future living.  

📜 *Shloka 1*  
\"ॐ पृथ्वी त्वया धृता लोकाः देवि त्वं विष्णुना धृता।  
त्वं च धारय मां नित्यं पवित्रं कुरु चासनम्।।\"  
Meaning: \"O Mother Earth, you support all beings and are sustained by Lord Vishnu. Please support me and make this seat pure and sacred.\"  

📜 *Shloka 2*  
\"ॐ वासुदेवाय नमः\"  
Meaning: \"Salutations to Lord Vasudeva, the preserver of all.\"  

### Significance:  
Bhoomi Poojan signifies respect towards Mother Earth before using her land. It removes negative energies and Vastu doshas, ensuring peace, prosperity, and success in the new construction. This ritual is also a way to honor the five elements (Pancha Mahabhutas) that sustain life.  

### Benefits of Bhoomi Poojan:  
- Ensures successful completion of construction projects.  
- Removes Vastu doshas and negative energies from the land.  
- Brings prosperity, wealth, and harmony to the household or workplace.  
- Invokes divine protection for the property and family.  
- Brings peace of mind and stability.  

### Ritual Procedure:  
1. Sankalp (pledge) and invocation of deities.  
2. Ganesh Pooja for removal of obstacles.  
3. Kalash sthapana and worship of Mother Earth.  
4. Vastu Purusha Mandala pujan.  
5. Navagraha Shanti rituals for planetary blessings.  
6. Recitation of Vedic mantras and shlokas.  
7. Digging of the first soil and laying foundation stone with offerings.  
8. Havan for purification and divine blessings.  
9. Aarti and prasad distribution.  

This sacred ritual ensures divine blessings, positive energy flow, and overall well-being of those residing or working on the land.",
                'brief_description_hi' => "भूमि पूजन एक अत्यंत पवित्र वैदिक अनुष्ठान है जो किसी भी निर्माण कार्य, भवन, कार्यालय या कृषि कार्य की शुरुआत से पहले किया जाता है। पृथ्वी को माता स्वरूप मानकर उनसे अनुमति और आशीर्वाद लिया जाता है ताकि कार्य सफल और शुभ फलदायी हो।  

इसमें वास्तु पुरुष और पंचमहाभूतों की पूजा की जाती है जिससे दोषों का निवारण होता है और निर्माण कार्य में किसी प्रकार की बाधा नहीं आती।  

📜 *श्लोक 1*  
\"ॐ पृथ्वी त्वया धृता लोकाः देवि त्वं विष्णुना धृता।  
त्वं च धारय मां नित्यं पवित्रं कुरु चासनम्।।\"  
अर्थ: \"हे माता पृथ्वी, आपने सभी लोकों को धारण किया है और आप स्वयं विष्णु भगवान द्वारा धारण की गई हैं। कृपया मुझे भी धारण करें और इस आसन को पवित्र करें।\"  

📜 *श्लोक 2*  
\"ॐ वासुदेवाय नमः\"  
अर्थ: \"भगवान वासुदेव को नमन है।\"  

### महत्व:  
भूमि पूजन से पृथ्वी माता का आशीर्वाद प्राप्त होता है और भूमि पर निर्माण कार्य शुभ होता है। यह नकारात्मक ऊर्जा और वास्तु दोषों को दूर करता है तथा घर और परिवार में सुख, शांति और समृद्धि लाता है।  

### लाभ:  
- निर्माण कार्य में सफलता और स्थिरता।  
- भूमि से नकारात्मक ऊर्जा और दोषों का निवारण।  
- घर-परिवार में धन, समृद्धि और सामंजस्य की वृद्धि।  
- भूमि और भवन की दिव्य रक्षा।  
- मानसिक शांति और सुख की प्राप्ति।  

### विधि:  
1. संकल्प और देवताओं का आह्वान।  
2. गणेश पूजन।  
3. कलश स्थापना और पृथ्वी माता की पूजा।  
4. वास्तु पुरुष मंडल पूजन।  
5. नवग्रह शांति अनुष्ठान।  
6. वैदिक मंत्रोच्चारण और श्लोक पाठ।  
7. भूमि की पहली खुदाई और शिला स्थापना।  
8. हवन और आहुति।  
9. आरती और प्रसाद वितरण।  

भूमि पूजन से भूमि पवित्र होती है और निर्माण कार्य में दिव्य कृपा, शांति और सकारात्मक ऊर्जा बनी रहती है।",
                'price_pandit_samagri' => 45000,
                'price_pandit_only' => 30000,
                'price_samagri_only' => 20000,
                'hero_banner_path' => 'sample-images/bhoomi-poojan.jpg',
            ],
            [
                'title' => 'Shradh (Pitru Paksha Pooja)',
                'title_hi' => 'श्राद्ध (पितृ पक्ष पूजा)',
                'slug' => Str::slug('Shradh Pitru Paksha Pooja'),
                'description' => 'A Vedic ritual performed to honor and pay homage to ancestors during Pitru Paksha for peace, blessings, and liberation of their souls.',
                'description_hi' => 'श्राद्ध एक वैदिक अनुष्ठान है जो पितृ पक्ष के दौरान पूर्वजों को श्रद्धांजलि देने, उनके आशीर्वाद और मोक्ष की प्राप्ति के लिए किया जाता है।',
                'brief_description' => "Shradh, also known as *Pitru Tarpan* or *Pitru Paksha Pooja*, is a sacred Vedic ritual performed to honor our ancestors (Pitrs) and seek their blessings. It is generally observed during the fortnight of Pitru Paksha, which falls in the Krishna Paksha (waning phase) of the month of Bhadrapada or Ashwin.  

The ritual involves offering food (Pind Daan), water (Tarpan), and prayers to departed souls, thereby ensuring their peace and liberation. Shradh is considered an essential duty (Pitru Rina) of every individual towards their ancestors, symbolizing gratitude and remembrance.  

📜 *Shloka 1*  
\"ॐ पितृभ्यः स्वधा नमः।\"  
Meaning: \"Obeisance and offerings to the ancestors with reverence.\"  

📜 *Shloka 2*  
\"पितृणाम् आसीनानाम् तृप्तिरस्तु।\"  
Meaning: \"May the offerings bring eternal satisfaction to the ancestors.\"  

### Significance:  
Shradh connects the living with their ancestral lineage, ensuring that the souls of forefathers rest in peace. It is believed that when Shradh is performed with devotion, it removes Pitru Dosha and grants prosperity, longevity, and divine blessings to the family.  

### Benefits of Shradh:  
- Ensures peace and liberation of the departed souls.  
- Removes Pitru Dosha from the family lineage.  
- Brings harmony, prosperity, and success in life.  
- Invokes ancestral blessings for protection and wellbeing.  
- Strengthens family unity and spiritual growth.  

### Ritual Procedure:  
1. Sankalp (pledge) and invocation of ancestors.  
2. Ganesh and Vishnu Pooja for auspicious beginnings.  
3. Pind Daan (offering of rice balls mixed with sesame, barley, and ghee).  
4. Tarpan (offering water with black sesame seeds).  
5. Feeding Brahmins, cows, and needy persons.  
6. Recitation of Shradh mantras and prayers.  
7. Donation of food, clothes, and dakshina.  
8. Aarti and concluding blessings.  

Shradh performed with sincerity not only uplifts the departed souls but also blesses the family with peace, prosperity, and protection from unseen obstacles.",
                'brief_description_hi' => "श्राद्ध, जिसे *पितृ तर्पण* या *पितृ पक्ष पूजा* भी कहा जाता है, पूर्वजों को सम्मान और तृप्ति प्रदान करने वाला वैदिक अनुष्ठान है। यह भाद्रपद या आश्विन मास के कृष्ण पक्ष (पितृ पक्ष) में किया जाता है।  

इसमें पिंड दान, तर्पण और भोजन अर्पण के माध्यम से departed आत्माओं की शांति और मोक्ष के लिए प्रार्थना की जाती है। श्राद्ध को प्रत्येक व्यक्ति का *पितृ ऋण* माना गया है, जो कृतज्ञता और स्मरण का प्रतीक है।  

📜 *श्लोक 1*  
\"ॐ पितृभ्यः स्वधा नमः।\"  
अर्थ: \"पूर्वजों को श्रद्धा और अर्पण सहित प्रणाम।\"  

📜 *श्लोक 2*  
\"पितृणाम् आसीनानाम् तृप्तिरस्तु।\"  
अर्थ: \"पूर्वजों की आत्माएँ सदैव तृप्त और संतुष्ट रहें।\"  

### महत्व:  
श्राद्ध से जीवित और पूर्वजों की आत्माओं के बीच संबंध मजबूत होता है। यह पितृ दोष का निवारण करता है और परिवार में सुख, शांति और समृद्धि लाता है। श्रद्धा से किया गया श्राद्ध पितरों की आत्मा को शांति और मोक्ष देता है।  

### लाभ:  
- departed आत्माओं की शांति और मोक्ष।  
- परिवार से पितृ दोष का निवारण।  
- जीवन में समृद्धि, सफलता और शांति।  
- पितरों का आशीर्वाद और रक्षा।  
- पारिवारिक एकता और आध्यात्मिक उन्नति।  

### विधि:  
1. संकल्प और पितरों का आह्वान।  
2. गणेश और विष्णु पूजन।  
3. पिंड दान (तिल, जौ, चावल और घी से बने पिंड अर्पण)।  
4. तर्पण (जल में काले तिल डालकर अर्पण)।  
5. ब्राह्मण, गौ और गरीबों को भोजन कराना।  
6. श्राद्ध मंत्रोच्चारण।  
7. अन्न, वस्त्र और दक्षिणा का दान।  
8. आरती और आशीर्वाद ग्रहण।  

श्राद्ध करने से departed आत्माओं को शांति मिलती है और परिवार में सुख, समृद्धि और रक्षा बनी रहती है।",
                'price_pandit_samagri' => 25000,
                'price_pandit_only' => 15000,
                'price_samagri_only' => 10000,
                'hero_banner_path' => 'sample-images/shradh.jpg',
            ],


        ];

        foreach ($poojas as $pooja) {
            Pooja::create($pooja);
        }
    }
}
