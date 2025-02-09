function getList() {
  array = [
  ["5 Centimeters Per Second", "https://myanimelist.net/anime/1689/Byousoku_5_Centimeter"],
  ["A.I.C.O.: Incarnation", "https://myanimelist.net/anime/36039/AICO__Incarnation"],
  ["Action Heroine Cheer Fruits", "https://myanimelist.net/anime/34800/Action_Heroine_Cheer_Fruits"],
  ["Agukaru", "https://myanimelist.net/anime/24989/Agukaru__Play_with_Ibaraki-hen"],
  ["Air", "https://myanimelist.net/anime/101/Air"],
  ["Akira", "https://myanimelist.net/manga/664/Akira"],
  ["A Lull in the Sea", "https://myanimelist.net/anime/16067/Nagi_no_Asu_kara"],
  ["Amanchu", "https://myanimelist.net/anime/31771/Amanchu"],
  ["Angolmois: Record of Mongol Invasion", "https://myanimelist.net/anime/35834/Angolmois__Genkou_Kassenki"],
  ["Apache Baseball Army", "https://myanimelist.net/anime/3844/Apache_Yakyuugun"],
  ["A Place Further than the Universe", "https://myanimelist.net/anime/35839/Sora_yori_mo_Tooi_Basho"],
  ["Barefoot Gen", "https://myanimelist.net/anime/1824/Hadashi_no_Gen"],
  ["Beyond the Boundary", "https://myanimelist.net/anime/18153/Kyoukai_no_Kanata"],
  ["Big Order", "https://myanimelist.net/anime/31904/Big_Order_TV"],
  ["Blue Seed", "https://myanimelist.net/anime/998/Blue_Seed"],
  ["Bungo Stray Dogs", "https://myanimelist.net/anime/31478/Bungou_Stray_Dogs"],
  ["Chihayafuru", "https://myanimelist.net/anime/10800/Chihayafuru"],
  ["Crayon Shin-Chan", "https://myanimelist.net/anime/966/Crayon_Shin-chan"],
  ["Dagashi Kashi", "https://myanimelist.net/anime/31636/Dagashi_Kashi"],
  ["Dennou Coil", "https://myanimelist.net/anime/2164/Dennou_Coil"],
  ["Detective Conan", "https://myanimelist.net/anime/235/Detective_Conan"],
  ["Diary of our Days at the Breakwater", "https://myanimelist.net/anime/39730/Houkago_Teibou_Nisshi"],
  ["Durarara!!", "https://myanimelist.net/anime/6746/Durarara"],
  ["Eight Clouds Rising", "https://myanimelist.net/anime/1026/Yakumotatsu"],
  ["Encouragement of Climb", "https://myanimelist.net/anime/14355/Yama_no_Susume"],
  ["Engaged to the Unidentified", "https://myanimelist.net/anime/20541/Mikakunin_de_Shinkoukei"],
  ["Erased", "https://myanimelist.net/anime/31043/Boku_dake_ga_Inai_Machi"],
  ["F", "https://myanimelist.net/anime/6055/F"],
  ["Fate/Zero", "https://myanimelist.net/anime/10087/Fate_Zero"],
  ["Flying Witch", "https://myanimelist.net/anime/31376/Flying_Witch"],
  ["Free!", "https://myanimelist.net/anime/18507/Free"],
  ["Gabriel DropOut", "https://myanimelist.net/anime/33731/Gabriel_DropOut"],
  ["Gegege no Kitarou", "https://myanimelist.net/anime/37140/Gegege_no_Kitarou_2018"],
  ["Ghost Hound", "https://myanimelist.net/anime/2596/Shinreigari"],
  ["Girls & Panzer", "https://myanimelist.net/anime/14131/Girls___Panzer"],
  ["Girly Air Force", "https://myanimelist.net/anime/37998/Girly_Air_Force"],
  ["Glasslip", "https://myanimelist.net/anime/23079/Glasslip"],
  ["Gokujo", "https://myanimelist.net/anime/11769/Gokujo__Gokurakuin_Joshikou_Ryou_Monogatari"],
  ["Golden Kamuy", "https://myanimelist.net/anime/36028/Golden_Kamuy"],
  ["Good Luck Girl", "https://myanimelist.net/anime/13535/Binbougami_ga"],
  ["Grand Blue", "https://myanimelist.net/anime/37105/Grand_Blue"],
  ["Grave of the Fireflies", "https://myanimelist.net/anime/578/Hotaru_no_Haka"],
  ["Ground Control to Psychoelectric Girl", "https://myanimelist.net/anime/9379/Denpa_Onna_to_Seishun_Otoko"],
  ["Gunparade March", "https://myanimelist.net/anime/266/Gunparade_March__Arata_Naru_Kougunka"],
  ["Haikyuu!!", "https://myanimelist.net/anime/20583/Haikyuu"],
  ["Hakata Mentai! Pirikarako-chan", "https://myanimelist.net/anime/39620/Hakata_Mentai_Pirikarako-chan"],
  ["Hakata Tonkotsu Ramens", "https://myanimelist.net/anime/35889/Hakata_Tonkotsu_Ramens"],
  ["Hanasaku Iroha", "https://myanimelist.net/anime/9289/Hanasaku_Iroha"],
  ["Hand Shakers", "https://myanimelist.net/anime/32981/Hand_Shakers"],
  ["Haven’t You Heard? I’m Sakamoto", "https://myanimelist.net/anime/32542/Sakamoto_Desu_ga"],
  ["Heaven’s Lost Property", "https://myanimelist.net/anime/5958/Sora_no_Otoshimono"],
  ["He is My Master", "https://myanimelist.net/anime/412/Kore_ga_Watashi_no_Goshujinsama"],
  ["Here Comes Miss Modern", "https://myanimelist.net/anime/33378/Haikara-san_ga_Tooru_Movie_1__Benio_Hana_no_17-sai"],
  ["Higurashi:When They Cry", "https://myanimelist.net/anime/934/Higurashi_no_Naku_Koro_ni"],
  ["Hikaru no Go", "https://myanimelist.net/anime/135/Hikaru_no_Go"],
  ["Hinamatsuri", "https://myanimelist.net/anime/36296/Hinamatsuri_TV"],
  ["Hulaing Babies", "https://myanimelist.net/anime/34332/Hulaing_Babies"],
  ["If My Favorite Pop Idol Made It to the Budokan, I Would Die", "https://myanimelist.net/anime/37890/Oshi_ga_Budoukan_Ittekuretara_Shinu"],
  ["Inari Kon Kon", "https://myanimelist.net/anime/20457/Inari_Konkon_Koi_Iroha"],
  ["Initial D", "https://myanimelist.net/anime/185/Initial_D_First_Stage"],
  ["Iroduku: The World in Colors", "https://myanimelist.net/anime/37497/Irozuku_Sekai_no_Ashita_kara"],
  ["Kamichu!", "https://myanimelist.net/anime/489/Kamichu"],
  ["Kannagi", "https://myanimelist.net/anime/3958/Kannagi"],
  ["Keijo!!!!!!!!", "https://myanimelist.net/anime/32686/Keijo"],
  ["Kids on the Slope", "https://myanimelist.net/anime/12531/Sakamichi_no_Apollon"],
  ["KinMoza", "https://myanimelist.net/anime/16732/Kiniro_Mosaic"],
  ["Komachi to Dangorou", "https://myanimelist.net/anime/16389/Komachi_to_Dangorou"],
  ["K-On!", "https://myanimelist.net/anime/5680/K-On"],
  ["Kuromukuro", "https://myanimelist.net/anime/32245/Kuromukuro"],
  ["Lagrange: The Flower of Rin-ne", "https://myanimelist.net/anime/11227/Rinne_no_Lagrange"],
  ["Laid-Back Camp", "https://myanimelist.net/anime/34798/Yuru_Camp%E2%96%B3"],
  ["Laughing Under the Clouds", "https://myanimelist.net/anime/21743/Donten_ni_Warau"],
  ["Level E", "https://myanimelist.net/anime/9834/Level_E"],
  ["Looking up at the Half Moon", "https://myanimelist.net/anime/587/Hanbun_no_Tsuki_ga_Noboru_Sora"],
  ["Love, Chunibyo & Other Delusions!", ""],
  ["Love Live! Sunshine!!", "https://myanimelist.net/anime/14741/Chuunibyou_demo_Koi_ga_Shitai"],
  ["Lovely Complex", "https://myanimelist.net/anime/2034/Lovely%E2%98%85Complex"],
  ["Lovely Muco", "https://myanimelist.net/anime/30651/Itoshi_no_Muco"],
  ["Lucky Star", "https://myanimelist.net/anime/1887/Lucky%E2%98%86Star"],
  ["Madam is a Magical Girl", "https://myanimelist.net/anime/614/Okusama_wa_Mahou_Shoujo"],
  ["Magical Girl Raising Project", "https://myanimelist.net/anime/33003/Mahou_Shoujo_Ikusei_Keikaku"],
  ["Magical Shopping Arcade Abenobashi", "https://myanimelist.net/anime/306/Abenobashi_Mahou%E2%98%86Shoutenga"],
  ["Mai-Mai Miracle", "https://myanimelist.net/anime/5084/Mai_Mai_Shinko_to_Sennen_no_Mahou"],
  ["Masmamune Datenicle", "https://myanimelist.net/anime/32248/Masamune_Datenicle"],
  ["Meganebu!", "https://myanimelist.net/anime/19257/Meganebu"],
  ["Mitsuboshi Colors", "https://myanimelist.net/anime/35078/Mitsuboshi_Colors"],
  ["Mokke", "https://myanimelist.net/anime/2931/Mokke"],
  ["Momokuri", "https://myanimelist.net/anime/30014/Momokuri"],
  ["Monkey Turn", "https://myanimelist.net/anime/2740/Monkey_Turn"],
  ["Musashi no Ken", "https://myanimelist.net/anime/4062/Musashi_no_Ken"],
  ["My Bride is a Mermaid", "https://myanimelist.net/anime/2104/Seto_no_Hanayome"],
  ["My-Hime", "https://myanimelist.net/anime/98/Mai-HiME"],
  ["My Mental Choices Are Completely Interfering with my School", "https://myanimelist.net/anime/19221/Ore_no_Nounai_Sentakushi_ga_Gakuen_Love_Comedy_wo_Zenryoku_de_Jama_Shiteiru"],
  ["Myself; Yourself", "https://myanimelist.net/anime/2926/Myself__Yourself"],
  ["My Teen Romantic Comedy SNAFU", "https://myanimelist.net/anime/14813/Yahari_Ore_no_Seishun_Love_Comedy_wa_Machigatteiru"],
  ["Napping Princess", ""],
  ["Natsume’s Book of Friends", "https://myanimelist.net/anime/33204/Hirune_Hime__Shiranai_Watashi_no_Monogatari"],
  ["Natsunagu!", "https://myanimelist.net/anime/40738/Natsunagu"],
  ["Neon Genesis Evangelion", "https://myanimelist.net/anime/30/Neon_Genesis_Evangelion"],
  ["Non Non Biyori", "https://myanimelist.net/anime/17549/Non_Non_Biyori"],
  ["No-Rin", "https://myanimelist.net/anime/18095/Nourin"],
  ["Ocean Waves", "https://myanimelist.net/anime/743/Umi_ga_Kikoeru"],
  ["Oi! Ryoma", "https://myanimelist.net/anime/8415/Oi_Ryouma"],
  ["Onegai Teacher", "https://myanimelist.net/anime/195/Onegai%E2%98%86Teacher"],
  ["Only Yesterday", "https://myanimelist.net/anime/1029/Omoide_Poroporo"],
  ["Persona 4", "https://myanimelist.net/anime/10588/Persona_4_the_Animation?q=persona%204&"],
  ["Poco’s Udon World", "https://myanimelist.net/anime/32673/Udon_no_Kuni_no_Kiniro_Kemari"],
  ["Prefectural Earth Defense Force", "https://myanimelist.net/anime/2422/Kenritsu_Chikyuu_Boueigun?q=prefectural%20earth%20defense%20force"],
  ["Princess Mononoke", "https://myanimelist.net/anime/164/Mononoke_Hime"],
  ["RDG: Red Data Girl", "https://myanimelist.net/anime/14921/RDG__Red_Data_Girl"],
  ["Robotics;Notes", "https://myanimelist.net/anime/13599/Robotics_Notes"],
  ["Saki", "https://myanimelist.net/anime/5671/Saki"],
  ["Sakura no Chikai:Maronni Yell", "https://myanimelist.net/anime/36815/Sakura_no_Chikai__Marronni%E2%98%86Yell_-_Higashi_no_Hichou_Shimotsuke-shi_wo_Yell"],
  ["Sakura Quest", "https://myanimelist.net/anime/34494/Sakura_Quest"],
  ["Sarazanmai", "https://myanimelist.net/anime/37426/Sarazanmai"],
  ["Shrine of the Morning Mist", "https://myanimelist.net/anime/231/Asagiri_no_Miko"],
  ["Silverfang", "https://myanimelist.net/anime/589/Ginga_Nagareboshi_Gin"],
  ["Silver Spoon", "https://myanimelist.net/anime/16918/Gin_no_Saji"],
  ["Sketchbook: Full Color’s", "https://myanimelist.net/anime/2942/Sketchbook__Full_Colors"],
  ["Slam Dunk", "https://myanimelist.net/anime/170/Slam_Dunk"],
  ["Sound! Euphonium", "https://myanimelist.net/anime/27989/Hibike_Euphonium"],
  ["Space Brothers", "https://myanimelist.net/anime/12431/Uchuu_Kyoudai"],
  ["Spring and Chaos", "https://myanimelist.net/anime/1206/Ihatov_Gensou__Kenji_no_Haru"],
  ["Steins;Gate", "https://myanimelist.net/anime/9253/Steins_Gate"],
  ["Strawberry Marshmallow", "https://myanimelist.net/anime/488/Ichigo_Mashimaro"],
  ["Tamako Market", "https://myanimelist.net/anime/16417/Tamako_Market"],
  ["Tamayura", "https://myanimelist.net/anime/9055/Tamayura"],
  ["Tari Tari", "https://myanimelist.net/anime/13333/Tari_Tari"],
  ["Teasing Master Takagi", "https://myanimelist.net/anime/35860/Karakai_Jouzu_no_Takagi-san"],
  ["Tenchi Muyou!", "https://myanimelist.net/anime/696/Tenchi_Muyou"],
  ["The Eccentric Family", "https://myanimelist.net/anime/17909/Uchouten_Kazoku"],
  ["The Flowers of Evil", "https://myanimelist.net/anime/16201/Aku_no_Hana"],
  ["The Lost Village", "https://myanimelist.net/anime/32438/Mayoiga"],
  ["The Melancholy of Haruhi Suzumiya", "https://myanimelist.net/anime/849/Suzumiya_Haruhi_no_Yuuutsu"],
  ["The Place Promised in our Early Days", "https://myanimelist.net/anime/433/Kumo_no_Mukou_Yakusoku_no_Basho"],
  ["The Tatami Galaxy", "https://myanimelist.net/anime/7785/Yojouhan_Shinwa_Taikei"],
  ["The Wind Rises", "https://myanimelist.net/anime/16662/Kaze_Tachinu"],
  ["The Wings of Rean", "https://myanimelist.net/anime/574/Rean_no_Tsubasa"],
  ["True Tears", "https://myanimelist.net/anime/2129/True_Tears"],
  ["Umi Monogatari", "https://myanimelist.net/anime/6129/Umi_Monogatari__Anata_ga_Ite_Kureta_Koto"],
  ["Ushio to Tora", "https://myanimelist.net/anime/29854/Ushio_to_Tora_TV"],
  ["Waiting in the Summer", "https://myanimelist.net/anime/11433/Ano_Natsu_de_Matteru"],
  ["Wake Up, Girls!", "https://myanimelist.net/anime/19023/Wake_Up_Girls"],
  ["Wave, Listen to Me!", "https://myanimelist.net/anime/40513/Nami_yo_Kiitekure"],
  ["Wolf Children", "https://myanimelist.net/anime/12355/Ookami_Kodomo_no_Ame_to_Yuki"],
  ["Working!!", "https://myanimelist.net/anime/6956/Working"],
  ["Yaoamushi Pedal", "https://myanimelist.net/anime/18179/Yowamushi_Pedal"],
  ["Yatogame-chan Kansatsu", "https://myanimelist.net/anime/37940/Yatogame-chan_Kansatsu_Nikki"],
  ["Yomigaeru Sora: Rescue Wings", "https://myanimelist.net/anime/798/Yomigaeru_Sora__Rescue_Wings"],
  ["Your Name.", "https://myanimelist.net/anime/32281/Kimi_no_Na_wa"],
  ["Yukiwatari", "https://myanimelist.net/anime/15141/Yukiwatari"],
  ["Yuki Yuna is a Hero", "https://myanimelist.net/anime/25519/Yuuki_Yuuna_wa_Yuusha_de_Aru"],
  ["Yuri!!! On Ice", "https://myanimelist.net/anime/32995/Yuri_on_Ice"],
  ["Zombieland Saga", "https://myanimelist.net/anime/37976/Zombieland_Saga"]]
  

  renderList(array)
}

function renderList(arr) {
  table = document.getElementById("animeList");
  count = 0;
  for (i=0; i < arr.length; i++) {
    if (count == 0) {
      row = document.createElement("tr");
    }
    count++;

    td = document.createElement("td");
    checkBox = document.createElement("input");
    checkBox.setAttribute('type', 'checkbox');
    checkBox.setAttribute('name', 'anime[]');
    checkBox.setAttribute('value', arr[i][0]+" "+arr[i][1]);
    console.log(checkBox);
    link = document.createElement("a");
    link.setAttribute("href",arr[i][1]);
    link.innerHTML = arr[i][0];
    td.appendChild(checkBox);
    td.appendChild(link);
      if (arr[i] != null) {
      row.appendChild(td);
      }
  console.log(count);
  if (count > 3) {
    row.appendChild(td);
    table.appendChild(row);
    submit = document.createElement("input");
    submit.setAttribute("type", "submit");
    submit.setAttribute("value", "Submit");


    count = 0;
  }
  console.log(table);
  }
  table.appendChild(row);
    submit = document.createElement("input");
    submit.setAttribute("type", "submit");
    submit.setAttribute("value", "Submit");
    table.appendChild(submit)
}


getList()
