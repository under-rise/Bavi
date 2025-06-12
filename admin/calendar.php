<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="robots" content="noindex">
    <title>一斉送信 | Bavi</title>
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/reset.css?1648760965" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/style.css?1648760966" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/page.css?1648760966" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/detail.css?1648760966" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/form.css?1648760966" />
    <link type="text/css" rel="stylesheet" href="./css/calendar.css?1.2" />
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://bavi.jp/assets/js/customer/main.js?1648761028"></script>

    <style>
        .btn-success {
            width: 300px;
            margin: 10px auto;
        }

        #template_select {
            font-size: 16px;
            padding: 5px 20px;
            background-color: #fff;
            border: 1px solid #999;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .send_list {
            background-color: #fff;
            padding: 10px 20px;
            border-radius: 10px;
            box-shadow: 0 0 3px #999;
        }

        .send_list li {
            margin-bottom: 5px;
        }
    </style>
</head>

<body id="spot">
    <!--header-->
    <header>
        <div id="spMainBtn">
            <i class="fas fa-th sp"></i>
        </div>
        <div id="logo_sec">
            <div id="logo"><a href="/customer"><img src="/assets/img/customer/logo.png"></a></div>
            <h1>運営側管理ページ</h1>
        </div>
        <div class="nav">
            <div class="close sp"><i class="fas fa-times"></i></i></div>
            <div class="guestInfomation">
                <dl>
                    <dt></dt>
                    <dd><a href="/customer/info/edit" class="under-line">オーナー：ゼネラルパーソンカンパニー株式会社</a></dd>
                    <dd><a href="/customer" class="btn type04 change_shop">登録店舗一覧</a></dd>
                </dl>
            </div>
            <ul class="mainBtn detail_link_sec">
                <li class="sub_nav"><a>案件情報</a>
                    <ul style="display: none;">
                        <li><a href="/customer/order/">BBQ会場 案件一覧</a></li>
                        <li><a href="/customer/order/create">BBQ会場 案件登録</a></li>
                    </ul>
                </li>
                <li><a href="/admin/calendar.php">予約カレンダー</a></li>
                <li><a href="/customer/contacts/">問合せ一覧</a></li>
                <li><a href="/customer/info/edit"><i class="fas fa-id-card"></i>オーナー情報</a></li>
                <li><a href="mailto:info@bavi.jp"><i class="fas fa-envelope"></i>お問合せ</a></li>
            </ul>
            <ul class="mainBtn">
                <li><a href="/customer/admin">管理画面に戻る</a></li>
            </ul>
            <ul class="sns flex">
                <li><a href="https://www.instagram.com/bavi_bbq/" target="_blacnk"><img
                            src="/assets/img/customer/icon_instagram.png"></a></li>
                <li><a href="https://line.me/ti/p/%40637eulru" target="_blacnk"><img
                            src="/assets/img/customer/icon_line.png"></a></li>
                <li><a href="https://www.youtube.com/channel/UCMA8rsf6gPte0ZDpY62A8Pg" target="_blank"><img
                            src="/assets/img/customer/icon_youtube.png"></a></li>
            </ul>
        </div>
    </header>
    <!--header END-->
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/bootstrap.css?1616644533" />

    <div id="container">

        <h3>予約カレンダー</h3>

        <div x-data="calendar()" x-init="init()" class="calendar">

            <div class="facilities">
                <ul>
                    <li @click="setFacilityWithName(null, $event)" :class="currentFacilityId === null ? 'active' : ''">全施設</li>
                    <li @click="setFacilityWithName(1, $event)" :class="currentFacilityId === 1 ? 'active' : ''">秋川橋河川公園バーベキューランド</li>
                    <li @click="setFacilityWithName(2, $event)" :class="currentFacilityId === 2 ? 'active' : ''">妙典河川敷・自由広場</li>
                    <li @click="setFacilityWithName(3, $event)" :class="currentFacilityId === 3 ? 'active' : ''">秋川渓谷 錦江閣リバーサイドBBQ＆Bavi</li>
                    <li @click="setFacilityWithName(4, $event)" :class="currentFacilityId === 4 ? 'active' : ''">キラナガーデン豊洲</li>
                </ul>
            </div>

            <h2 x-text="currentYear+'年'+ Month+'月'"></h2>

            <div class="payment_btn">
                <ul>
                    <li @click="setPaymentFilter('all')" :class="paymentFilter === 'all' ? 'active' : ''">全て</li>
                    <li @click="setPaymentFilter('paid')" :class="paymentFilter === 'paid' ? 'active' : ''">決済</li>
                    <li @click="setPaymentFilter('unpaid')" :class="paymentFilter === 'unpaid' ? 'active' : ''">未決済</li>
                </ul>
            </div>

            <table class="table">
                <thead>
                    <tr class="bg-gray-200 text-center">
                        <th class="sun">日</th>
                        <th>月</th>
                        <th>火</th>
                        <th>水</th>
                        <th>木</th>
                        <th>金</th>
                        <th class="sat">土</th>
                    </tr>
                </thead>

                <tbody>
                    <template x-for="(week, rowIndex) in rows" :key="rowIndex">
                        <tr>
                            <template x-for="(cell, colIndex) in week" :key="colIndex">
                                <td
                                    :class="{
                    'day_td': cell.day === '',
                    'today': cell.isToday
                }"
                                    @click="cell.day && getCount(formatDate(cell.day, currentMonth)) !== '' && openModal(formatDate(cell.day, currentMonth))">
                                    <div class="day" x-text="cell.day || ''"></div>

                                    <div class="projectCount" x-show="getCount(formatDate(cell.day, currentMonth)) !== ''">
                                        <span><span x-text="getCount(formatDate(cell.day, currentMonth))" class="num"></span><span>件</span></span>
                                    </div>
                                    <div x-show="getCount(formatDate(cell.day, currentMonth)) === ''">−</div>
                                </td>
                            </template>
                        </tr>
                    </template>

                </tbody>

            </table>

            <div class="changeMonth_sec">
                <button @click="changeMonth(-1)">← 前月</button>
                <button @click="changeMonth(1)">次月 →</button>
            </div>

            <!-- モーダル -->
            <div x-show="showModal" class="modal_sec">
                <div class="inr" @click.outside="showModal = false">
                    <h2 x-text="selectedDate"></h2>
                    <h3 x-text="selectedFacilityName">施設名</h3>
                    <table class="modal_table">
                        <thead>
                            <tr>
                                <th>案件ID</th>
                                <th>名前</th>
                                <th>会場</th>
                                <th>決済</th>
                                <!-- <th>時間</th> -->
                                <!-- <th>詳細</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <template x-for="item in filteredProjects" :key="item.id">
                                <tr>
                                    <td x-html="link(item)" class="link"></td>
                                    <td x-text="item.name"></td>
                                    <td x-text="item.facility_name"></td>
                                    <td x-text="checkPayment(item.payment)"></td>
                                    <!-- <td x-text="formattedTime(item.time)"></td> -->
                                    <!-- <td><a :href="link(item)" class="btn">詳細</a></td> -->
                                </tr>
                            </template>
                        </tbody>
                    </table>
                    <div @click="showModal = false" class="close_btn">×</div>
                </div>
            </div>


        </div>

    </div>
    <!--footer-->
    <footer>
        <dl>
            <dt>運営会社: ゼネラルパーソンカンパニー株式会社</dt>
            <dd>〒120-0001東京都足立区大谷田3丁目21番6号
            <dd>
            <dd>TEL: 03-5856-2030</dd>
            <dd>E-mail: info@bavi.jp</dd>
        </dl>
        <p id="copyright">© Copyright Bavi all right reserved.</p>
    </footer>

    <div id="overlay"></div>
    <!--footer END-->
    <div id="footer_btn">
        <span></span>
    </div>

    <script>
        $(function() {

            const url = './data/mail_template.json';
            const mailTitle = $('input[name=mail_title]');
            const textarea = $('textarea[name=message]');

            $('#template_select').on('change', function() {
                let value = $(this).val();

                if (value === '') {
                    // textarea.attr('readonly', false);
                    // mailTitle.attr('readonly', false);
                    textarea.val("");
                    mailTitle.val("");
                    return;
                } else {
                    // textarea.attr('readonly', true);
                    // mailTitle.attr('readonly', true);
                }

                fetch(url, {
                        cache: "no-store"
                    })
                    .then(response => {
                        return response.json();
                    })
                    .then(json => {
                        let data = json.filter(i => {
                            return i.id == value
                        });
                        mailTitle.val(data[0].title);
                        textarea.val(data[0].message);
                    });

            });

        });

        // calendar

        function calendar() {
            return {
                isReady: false,
                currentMonth: new Date().getMonth(),
                Month: new Date().getMonth() + 1,
                currentYear: new Date().getFullYear(),
                rows: [],
                projects: [],
                showModal: false,
                selectedDate: '',
                filteredProjects: [],
                todayStr: '',
                paymentFilter: 'all', // 'all' | 'paid' | 'unpaid'
                currentFacilityId: null, // null なら全施設、数字なら施設ID
                selectedFacilityName: '全施設',
                init() {
                    const today = new Date();
                    const yyyy = today.getFullYear();
                    const mm = String(today.getMonth() + 1).padStart(2, '0');
                    const dd = String(today.getDate()).padStart(2, '0');
                    this.todayStr = `${yyyy}-${mm}-${dd}`; // ← 例: 2025-04-18

                    this.projects = window.projectData || [];
                    this.filteredProjects = this.projects;
                    this.generateCalendar();
                    this.fetchProjects(this.currentYear, this.Month);
                },

                changeMonth(offset) {
                    let newMonth = this.Month + offset;
                    let newYear = this.currentYear;

                    if (newMonth > 12) {
                        newMonth = 1;
                        newYear++;
                    } else if (newMonth < 1) {
                        newMonth = 12;
                        newYear--;
                    }

                    this.fetchProjects(newYear, newMonth);
                    this.generateCalendar();
                },



                generateCalendar() {
                    const firstDay = new Date(this.currentYear, this.currentMonth, 1).getDay();
                    const totalDays = new Date(this.currentYear, this.currentMonth + 1, 0).getDate();

                    // 今日の日付
                    const today = new Date();
                    const todayY = today.getFullYear();
                    const todayM = today.getMonth();
                    const todayD = today.getDate();

                    // ブランク
                    const blanks = Array.from({
                        length: firstDay
                    }, () => ({
                        day: '',
                        isToday: false
                    }));

                    // 日数
                    const days = Array.from({
                        length: totalDays
                    }, (_, i) => {
                        const d = i + 1;
                        const isToday = (
                            this.currentYear === todayY &&
                            this.currentMonth === todayM &&
                            d === todayD
                        );
                        return {
                            day: d,
                            isToday: isToday
                        };
                    });

                    let allCells = [...blanks, ...days];

                    const pad = 7 - (allCells.length % 7);
                    if (pad < 7) {
                        allCells.push(...Array.from({
                            length: pad
                        }, () => ({
                            day: '',
                            isToday: false
                        })));
                    }

                    this.rows = [];
                    while (allCells.length) {
                        this.rows.push(allCells.splice(0, 7));
                    }
                },

                formatDate(day, month = this.currentMonth) {
                    if (!day) return '';
                    const mm = String(month + 1).padStart(2, '0');
                    const dd = String(day).padStart(2, '0');
                    return `${this.currentYear}-${mm}-${dd}`;
                },

                filtered(dateStr) {
                    return this.projects.filter(p => {
                        const matchDate = p.time.startsWith(dateStr);
                        const matchFacility = this.currentFacilityId === null || p.facility_id === this.currentFacilityId;
                        const matchPayment =
                            this.paymentFilter === 'all' ||
                            (this.paymentFilter === 'paid' && p.payment === true) ||
                            (this.paymentFilter === 'unpaid' && p.payment === false);
                        return matchDate && matchFacility && matchPayment;
                    });
                },

                getCount(dateStr) {
                    const matches = this.projects.filter(p => {
                        const localDate = new Date(p.time);
                        const yyyy = localDate.getFullYear();
                        const mm = String(localDate.getMonth() + 1).padStart(2, '0');
                        const dd = String(localDate.getDate()).padStart(2, '0');
                        const normalized = `${yyyy}-${mm}-${dd}`;

                        const matchDate = normalized === dateStr;
                        const matchFacility = this.currentFacilityId === null || p.facility_id === this.currentFacilityId;
                        const matchPayment =
                            this.paymentFilter === 'all' ||
                            (this.paymentFilter === 'paid' && p.payment === true) ||
                            (this.paymentFilter === 'unpaid' && p.payment === false);

                        return matchDate && matchFacility && matchPayment;
                    });

                    return matches.length || '';
                },

                openModal(dateStr) {
                    const [year, month, day] = dateStr.split('-');
                    this.selectedDate = `${year}年${parseInt(month)}月${parseInt(day)}日`;

                    this.filteredProjects = this.filtered(dateStr);
                    this.showModal = true;
                },

                setPaymentFilter(type) {
                    this.rows = JSON.parse(JSON.stringify(this.rows));
                    this.paymentFilter = type;
                    this.generateCalendar();
                },

                setFacility(id) {
                    this.currentFacilityId = id;
                    this.generateCalendar(); // 件数表示用の再描画
                },
                async fetchProjects(year, month) {
                    this.currentYear = year;
                    this.currentMonth = month - 1;
                    this.Month = month;

                    try {
                        const response = await fetch(`/admin/php/get-projects.php?year=${year}&month=${String(month).padStart(2, '0')}`);
                        if (!response.ok) throw new Error('通信エラー');
                        const data = await response.json();
                        this.projects = data;
                        this.filteredProjects = data;

                        this.generateCalendar();

                    } catch (e) {
                        console.error('データ取得に失敗:', e);
                    }
                },
                setFacilityWithName(id, event) {
                    this.setFacility(id);
                    this.selectedFacilityName = event.target.textContent.trim();
                },
                formattedTime(datetimeStr) {
                    const date = new Date(datetimeStr);
                    const year = date.getFullYear();
                    const month = date.getMonth() + 1;
                    const day = date.getDate();
                    const hours = String(date.getHours()).padStart(2, '0');
                    const minutes = String(date.getMinutes()).padStart(2, '0');

                    return `${year}年${month}月${day}日 ${hours}時${minutes}分`;
                },
                link(item) {
                    return `<a href="#${item.project_id}">${item.project_id}</a>`;
                },
                checkPayment(payment){
                    return payment ? '済み' : '未決済';
                }
            }
        }
    </script>


    <script src="./js/calendar.js"></script>
</body>

</html>