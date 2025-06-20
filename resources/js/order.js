document.addEventListener('alpine:init', () => {

    // Alpine.store
    Alpine.store('alpinePrice', {
        total_price: 0, // 元の合計金額を保持
        display_price: 0, // 割引適用後の表示金額を保持
        coupon: {},
        format() {
            return this.total_price.toLocaleString('ja-JP');
        },
        display_price_format() {
            return this.display_price.toLocaleString('ja-JP');
        },
        applyDiscount(couponData = this.coupon) {
            // もし引数にクーポンデータが渡され、それが有効なものなら、ストアの coupon を更新
            if (couponData && typeof couponData === 'object' && couponData !== null) {
                this.coupon = couponData;
            } else if (this.coupon === null) {
                // クーポンが設定されていない場合、割引をリセット
                this.display_price = this.total_price;
                return;
            }

            let finalPrice = this.total_price; 

            if (this.coupon) { // this.coupon が null でないことを確認

                if (this.coupon.type === 'percentage') {
                    finalPrice = this.total_price * (1 - this.coupon.value / 100);
                } else if (this.coupon.type === 'amount') {
                    finalPrice = this.total_price - this.coupon.value;
                }
                // マイナスにならないように調整
                if (finalPrice < 0) {
                    finalPrice = 0;
                }
            }
            this.display_price = Math.round(finalPrice); // 小数点以下を四捨五入
        },
        
    });

    // child_pet_use
    Alpine.data('child_pet_use', () => ({
        flag: false,
        open: false,
        num: {
            adult: 0,
            child: 0,
            preschooler: 0,
            infants: 0,
            pet: 0,
        },
        modalOpen() {
            this.open = !this.open;
        },
        init() {
            this.$watch('open', (value) => {
                if (!value) {
                    this.flag = false;
                    Object.keys(this.num).map((e) => {
                        if (parseInt(this.num[e]) !== 0) {
                            this.flag = true;
                            return;
                        }
                    });
                }
            });
        }
    }));

    // couponLogic
    Alpine.data('couponLogic', (shop_id) => ({
        couponCode: '',
        registeredCoupon: null,
        coupons: [],
        discountText :'',

        async fetchCoupons() {
          
            try {
                const response = await fetch('../resources/data/get_coupons.php?shop_id='+shop_id);
                if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
                this.coupons = await response.json();
            } catch (error) {
                console.error('クーポンデータの取得に失敗しました:', error);
                this.coupons = [];
            }
        },

        registerCoupon() {
            const foundCoupon = this.coupons.find(c => c.coupon_code === this.couponCode);
            if (foundCoupon) {
                this.registeredCoupon = foundCoupon;
                this.couponCode = '';
                if (Alpine.store('alpinePrice')) {
                    Alpine.store('alpinePrice').applyDiscount(this.registeredCoupon);
                }
                this.couponDisplay();
            } else {
                this.registeredCoupon = null;
                alert('クーポンコードが一致しません。');
                return;
            }
        },

        couponDisplay() {
            if (!this.registeredCoupon) return '';
            let discountText = '';
            if (this.registeredCoupon.type === 'percentage') {
                discountText = `${this.registeredCoupon.value}%割引！`;
            } else if (this.registeredCoupon.type === 'amount') {
                discountText = `${this.registeredCoupon.value}円引き！`;
            }
            this.registeredCoupon.text = discountText;
            return `${this.registeredCoupon.coupon_name}（${discountText}）`;
        },

        deleteCoupon(){
            this.couponCode = '';
            this.registeredCoupon = null;
             Alpine.store('alpinePrice').coupon = {};
        },

        init() {
            this.fetchCoupons();
        }
    }));
});
