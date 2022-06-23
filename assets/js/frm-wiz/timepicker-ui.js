"use strict";
function e(e, i, t, n) {
    return new (t || (t = Promise))((function (o, r) {
        function s(e) {
            try {
                l(n.next(e))
            } catch (e) {
                r(e)
            }
        }

        function a(e) {
            try {
                l(n.throw(e))
            } catch (e) {
                r(e)
            }
        }

        function l(e) {
            var i;
            e.done ? o(e.value) : (i = e.value, i instanceof t ? i : new t((function (e) {
                e(i)
            }))).then(s, a)
        }

        l((n = n.apply(e, i || [])).next())
    }))
}
Object.defineProperty(exports, "__esModule", {value: !0});
const i = (e, i, t = !1)=> {
    const {touches:n}=e, {clientX:o,clientY:r}=e;
    if (!i)return;
    const {left:s,top:a}=i.getBoundingClientRect();
    let l = {x: 0, y: 0};
    if (t) {
        if (t && void 0 !== n && Object.keys(n).length > 0) {
            const {clientX:e,clientY:i}=n[0];
            l = {x: e - s, y: i - a}
        }
    } else l = {x: o - s, y: r - a};
    return 0 !== Object.keys(l).length || l.constructor !== Object ? l : void 0
}, t = (e, i)=>!!e && e.classList.contains(i), n = (e, i, t)=> {
    if (!e)return;
    const n = new CustomEvent(i, {detail: t});
    e.dispatchEvent(n)
}, o = ()=>/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent), r = (e, i, t)=>((e, i)=>Math.round(e / i) * i)(e, i * t), s = (e, i)=>Array.from({length: Number(i) - Number(e) + 1}, ((i, t)=>Number(e) + t)), a = (e, i)=>Array.from({length: Number(i) - Number(e) + 1}, ((e, t)=>Number(i) - t)).reverse(), l = e=> {
    e && "function" == typeof e && e()
}, d = (e = "")=> {
    const i = e.replace(/(AM|PM|am|pm)/, (e=>` ${e}`)), t = new Date(`September 20, 2000 ${i}`);
    return `${t.getHours().toString().padStart(2, "0")}:${t.getMinutes().toString().padStart(2, "0")}`
}, u = (e, i, t, n)=> {
    if (!e)return {hour: "12", minutes: "00", type: "24h" === i ? void 0 : "PM"};
    const {value:o}=e;
    if (t) {
        if ("boolean" == typeof t && t) {
            const [e,t]=(new Date).toLocaleTimeString().split(":");
            if (/[a-z]/i.test(t) && "12h" === i) {
                const [i,n]=t.split(" ");
                return {hour: Number(e) <= 9 ? `0${Number(e)}` : e, minutes: i, type: n}
            }
            return {hour: Number(e) <= 9 ? `0${Number(e)}` : e, minutes: t, type: void 0}
        }
        {
            const {time:e,locales:o,preventClockType:r}=t;
            let s = e;
            if (e || (s = new Date), r && n) {
                const [e,i]=new Date(s).toLocaleTimeString().split(":");
                if (/[a-z]/i.test(i)) {
                    const [t,n]=i.split(" ");
                    return {hour: e, minutes: t, type: n}
                }
                return {hour: Number(e) <= 9 ? `0${Number(e)}` : e, minutes: i, type: void 0}
            }
            const [a,l]=new Date(s).toLocaleTimeString(o, {timeStyle: "short"}).split(":");
            if (/[a-z]/i.test(l) && "12h" === i) {
                const [e,i]=l.split(" ");
                return {hour: Number(a) <= 9 ? `0${Number(a)}` : a, minutes: e, type: i}
            }
            if ("12h" === i) {
                const [e,i]=new Date(`1970-01-01T${a}:${l}Z`).toLocaleTimeString("en-US", {
                    timeZone: "UTC",
                    hour12: !0,
                    hour: "numeric",
                    minute: "numeric"
                }).split(":"), [t,n]=i.split(" ");
                return {hour: Number(e) <= 9 ? `0${Number(e)}` : a, minutes: t, type: n}
            }
            return {hour: Number(a) <= 9 ? `0${Number(a)}` : a, minutes: l, type: void 0}
        }
    }
    if ("" === o || !o)return {hour: "12", minutes: "00", type: "24h" === i ? void 0 : "PM"};
    const [r,s]=o.split(" "), [a,l]=r.split(":");
    if (/[a-z]/i.test(r))return {error: "The input contains invalid letters or whitespace."};
    if (o.includes(" ")) {
        if (!s)return {
            error: `The input contains invalid letters or whitespace.\n        Problem is with input length (max 5), currentLength: ${o.length}.`,
            currentLength: o.length
        };
        if (o.length > 8 || "AM" !== s && "PM" !== s)return {
            error: `The input contains invalid letters or whitespace.\n        Problem is with input length (max 8), currentLength: ${o.length} or invalid type (PM or AM), currentType: ${s}.`,
            currentLength: o.length,
            currentType: s
        }
    }
    let d = Number(l);
    const u = Number(a);
    return d < 10 ? d = `0${d}` : 0 === d && (d = "00"), "12h" === i ? u > 12 || d > 59 || d < 0 || 0 === u || "AM" !== s && "PM" !== s ? {
        error: `The input contains invalid letters or numbers. Problem is with hour which should be less than 13 and higher or equal 0, currentHour: ${u}. Minutes should be less than 60 and higher or equal 0, currentMinutes: ${Number(d)} or invalid type (PM or AM), currentType: ${s}.`,
        currentHour: u,
        currentMin: d,
        currentType: s
    } : {
        hour: u < 10 ? `0${u}` : u.toString(),
        minutes: d.toString(),
        type: s
    } : u < 0 || u > 23 || d > 59 ? {
        error: `The input contains invalid numbers. Problem is with hour which should be less than 24 and higher or equal 0, currentHour: ${u}. Minutes should be less than 60 and higher or equal 0, currentMinutes: ${Number(d)}`,
        currentHour: u,
        currentMin: d
    } : {hour: u < 10 ? `0${u}` : u.toString(), minutes: d.toString()}
}, c = (e, i, t)=> {
    const n = Number(e);
    return "hour" === i ? "24h" !== t ? n > 0 && n <= 12 : n >= 0 && n <= 23 : "minutes" === i ? n >= 0 && n <= 59 : void 0
}, p = (e, i, t, n)=> {
    if (e) {
        if (Array.isArray(e) && e.length > 0) {
            return !e.map((e=>c(e, i, t))).some((e=>!1 === e))
        }
        if ("string" == typeof e || "number" == typeof e) {
            const o = c(e, i, t), r = null == n ? void 0 : n.map(Number).includes(Number(e));
            return !(!o || r)
        }
    }
};
function h(e, i) {
    void 0 === i && (i = {});
    var t = i.insertAt;
    if (e && "undefined" != typeof document) {
        var n = document.head || document.getElementsByTagName("head")[0], o = document.createElement("style");
        o.type = "text/css", "top" === t && n.firstChild ? n.insertBefore(o, n.firstChild) : n.appendChild(o), o.styleSheet ? o.styleSheet.cssText = e : o.appendChild(document.createTextNode(e))
    }
}
h(":export {\n  cranepurple800: #5c1349;\n  cranepurple900: #4e0d3a;\n  cranepurple700: #71135c;\n  cranered400: #f7363e;\n  white: #fff;\n  purple: #6200ee;\n  opacity: opacity 0.15s linear; }\n\n.timepicker-ui * {\n  box-sizing: border-box !important; }\n\n.timepicker-ui-modal {\n  font-family: 'Roboto', sans-serif;\n  position: fixed;\n  opacity: 0;\n  top: 0;\n  bottom: 0;\n  left: 0;\n  right: 0;\n  background-color: rgba(156, 155, 155, 0.6);\n  z-index: 5000; }\n  .timepicker-ui-modal.removed {\n    top: auto;\n    bottom: auto;\n    left: auto;\n    right: auto;\n    background-color: transparent; }\n\n.timepicker-ui-measure {\n  position: absolute;\n  top: -9999px;\n  width: 3.125rem;\n  height: 3.125rem;\n  overflow: scroll; }\n\n.timepicker-ui-wrapper, .timepicker-ui-wrapper.mobile {\n  position: fixed;\n  z-index: 5001;\n  width: 328px;\n  height: 500px;\n  top: 50%;\n  left: 50%;\n  transform: translate(-50%, -50%);\n  background-color: #fff;\n  border-radius: 4px;\n  box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 5px 8px 0px rgba(0, 0, 0, 0.14), 0px 1px 14px 0px rgba(0, 0, 0, 0.12);\n  display: flex;\n  flex-direction: column;\n  outline: none; }\n\n@media screen and (min-width: 320px) and (max-width: 825px) and (orientation: landscape) {\n  .timepicker-ui-wrapper {\n    flex-direction: row;\n    height: 360px;\n    width: 584px; } }\n\n@media screen and (max-width: 330px) and (orientation: portrait) {\n  .timepicker-ui-wrapper {\n    width: 315px; } }\n\n.timepicker-ui-wrapper.mobile {\n  height: 218px; }\n  @media screen and (max-width: 330px) {\n    .timepicker-ui-wrapper.mobile {\n      width: 315px; } }\n\n.timepicker-ui-header, .timepicker-ui-header.mobile {\n  padding-top: 52px;\n  padding-bottom: 36px;\n  padding-right: 24px;\n  padding-left: 24px;\n  height: 104px;\n  display: flex;\n  flex-direction: row;\n  justify-content: center;\n  align-items: center;\n  position: relative;\n  height: 100%; }\n\n.timepicker-ui-header.mobile {\n  padding-bottom: 0;\n  padding-top: 35px; }\n\n@media screen and (min-width: 320px) and (max-width: 825px) and (orientation: landscape) {\n  .timepicker-ui-header {\n    height: auto;\n    flex-direction: column; } }\n\n.timepicker-ui-select-time, .timepicker-ui-select-time.mobile {\n  text-transform: uppercase;\n  position: absolute;\n  top: calc(28px - 12px);\n  left: 24px;\n  font-size: 12px;\n  color: #a9a9a9; }\n\n.timepicker-ui-body {\n  height: 256px;\n  width: 256px;\n  margin: 0 auto;\n  position: relative;\n  border-radius: 100%; }\n  @media screen and (min-width: 320px) and (max-width: 825px) and (orientation: landscape) {\n    .timepicker-ui-body {\n      padding-right: 0;\n      padding-left: 0;\n      display: flex;\n      align-items: center;\n      justify-content: center;\n      margin-top: 23px; } }\n\n@media screen and (min-width: 320px) and (max-width: 825px) and (orientation: landscape) {\n  .timepicker-ui-wrapper-landspace {\n    display: flex;\n    flex-direction: column;\n    width: 100%; } }\n\n.timepicker-ui-footer, .timepicker-ui-footer-mobile {\n  height: 76px;\n  display: flex;\n  justify-content: space-between;\n  margin-bottom: 4px; }\n\n@media screen and (min-width: 320px) and (max-width: 825px) and (orientation: landscape) {\n  .timepicker-ui-footer {\n    justify-content: flex-end; } }\n\n.timepicker-ui-footer.mobile {\n  align-items: flex-start; }\n\n.timepicker-ui-clock-face {\n  background-color: #e0e0e0;\n  height: 100%;\n  width: 100%;\n  border-radius: 100%;\n  position: relative; }\n  @media screen and (min-width: 320px) and (max-width: 825px) and (orientation: landscape) {\n    .timepicker-ui-clock-face {\n      height: 256px;\n      width: 256px;\n      top: 15px; } }\n\n.timepicker-ui-dot {\n  position: absolute;\n  top: 50%;\n  left: 50%;\n  user-select: none;\n  touch-action: none;\n  transform: translate(-50%, -50%);\n  background-color: #6200ee;\n  height: 8px;\n  width: 8px;\n  border-radius: 100%; }\n\n.timepicker-ui-tips-wrapper {\n  height: 100%;\n  width: 100%; }\n\n.timepicker-ui-tips-wrapper-24h {\n  position: absolute;\n  height: 160px;\n  width: 160px;\n  z-index: 0;\n  transform: translate(-50%, -50%);\n  left: 50%;\n  top: 50%;\n  border-radius: 50%; }\n  .timepicker-ui-tips-wrapper-24h-disabled {\n    pointer-events: none;\n    touch-action: none;\n    user-select: none; }\n\n.timepicker-ui-hour-time-12, .timepicker-ui-minutes-time, .timepicker-ui-hour-time-24 {\n  position: absolute;\n  width: 32px;\n  height: 32px;\n  text-align: center;\n  cursor: pointer;\n  font-size: 17.6px;\n  display: flex;\n  justify-content: center;\n  align-items: center;\n  touch-action: none;\n  user-select: none; }\n  .timepicker-ui-hour-time-12 span, .timepicker-ui-minutes-time span, .timepicker-ui-hour-time-24 span {\n    touch-action: none;\n    user-select: none; }\n\n.timepicker-ui-hour-time-12 {\n  display: block;\n  display: flex;\n  justify-content: center;\n  align-items: center; }\n\n.timepicker-ui-wrapper-time, .timepicker-ui-wrapper-time.mobile {\n  display: flex;\n  margin-right: 10px;\n  height: 100%;\n  justify-content: center;\n  align-items: center; }\n\n@media screen and (min-width: 320px) and (max-width: 825px) and (orientation: landscape) {\n  .timepicker-ui-wrapper-time {\n    margin-right: 0;\n    height: auto; } }\n\n.timepicker-ui-wrapper-time-24h {\n  margin-right: 0px; }\n\n.timepicker-ui-wrapper-time.mobile {\n  position: relative; }\n\n.timepicker-ui-hour, .timepicker-ui-minutes, .timepicker-ui-hour.mobile, .timepicker-ui-minutes.mobile {\n  display: flex;\n  justify-content: center;\n  align-items: center;\n  font-size: 51.2px;\n  background-color: #e4e4e4;\n  border-radius: 7px;\n  cursor: pointer;\n  transition: all 0.3s ease;\n  outline: none;\n  border: 2px solid transparent;\n  padding: 10px;\n  width: 96px; }\n  .timepicker-ui-hour:focus, .timepicker-ui-minutes:focus, .timepicker-ui-hour.mobile:focus, .timepicker-ui-minutes.mobile:focus {\n    outline: auto; }\n  .timepicker-ui-hour:hover, .timepicker-ui-hour.active, .timepicker-ui-minutes:hover, .timepicker-ui-minutes.active, .timepicker-ui-hour.mobile:hover, .timepicker-ui-hour.mobile.active, .timepicker-ui-minutes.mobile:hover, .timepicker-ui-minutes.mobile.active {\n    color: #6200ee;\n    background-color: #ece0fd; }\n\n.timepicker-ui-hour.mobile, .timepicker-ui-minutes.mobile {\n  height: 70px; }\n  .timepicker-ui-hour.mobile[contenteditable='true']:focus, .timepicker-ui-hour.mobile[contenteditable='true']:active, .timepicker-ui-minutes.mobile[contenteditable='true']:focus, .timepicker-ui-minutes.mobile[contenteditable='true']:active {\n    border: 2px solid #6200ee;\n    outline-color: #6200ee;\n    user-select: all; }\n\n.timepicker-ui-dots, .timepicker-ui-dots.mobile {\n  padding-left: 5px;\n  padding-right: 5px;\n  display: flex;\n  justify-content: center;\n  align-items: center;\n  font-size: 57.6px;\n  user-select: none;\n  touch-action: none; }\n\n.timepicker-ui-wrapper-type-time, .timepicker-ui-wrapper-type-time.mobile {\n  display: flex;\n  flex-direction: column;\n  height: 80px;\n  justify-content: center;\n  align-items: center;\n  font-size: 16px;\n  font-weight: 500;\n  color: #787878; }\n\n@media screen and (min-width: 320px) and (max-width: 825px) and (orientation: landscape) {\n  .timepicker-ui-wrapper-type-time {\n    flex-direction: row;\n    width: 100%; } }\n\n.timepicker-ui-wrapper-type-time.mobile {\n  height: 70px; }\n\n.timepicker-ui-am, .timepicker-ui-pm, .timepicker-ui-am.mobile, .timepicker-ui-pm.mobile {\n  display: flex;\n  justify-content: center;\n  align-items: center;\n  border: 2px solid #d6d6d6;\n  transition: all 0.3s ease;\n  cursor: pointer;\n  width: 100%;\n  height: 100%; }\n  .timepicker-ui-am:hover, .timepicker-ui-am.active, .timepicker-ui-pm:hover, .timepicker-ui-pm.active, .timepicker-ui-am.mobile:hover, .timepicker-ui-am.mobile.active, .timepicker-ui-pm.mobile:hover, .timepicker-ui-pm.mobile.active {\n    color: #6200ee;\n    background-color: #ece0fd; }\n  .timepicker-ui-am.active, .timepicker-ui-pm.active, .timepicker-ui-am.mobile.active, .timepicker-ui-pm.mobile.active {\n    pointer-events: none; }\n\n@media screen and (min-width: 320px) and (max-width: 825px) and (orientation: landscape) {\n  .timepicker-ui-am, .timepicker-ui-pm {\n    width: 50%;\n    height: 44px; } }\n\n.timepicker-ui-am, .timepicker-ui-am.mobile {\n  border-top-left-radius: 7px;\n  border-top-right-radius: 7px;\n  border-bottom-width: calc(0.7504px / 2); }\n\n.timepicker-ui-am.mobile {\n  border-bottom-left-radius: 0; }\n\n@media screen and (min-width: 320px) and (max-width: 825px) and (orientation: landscape) {\n  .timepicker-ui-am {\n    border-top-left-radius: 7px;\n    border-bottom-left-radius: 7px;\n    border-top-right-radius: 0;\n    border-top-width: 1.5008px;\n    border-right-width: calc(0.7504px / 2); } }\n\n.timepicker-ui-pm, .timepicker-ui-pm.mobile {\n  border-bottom-left-radius: 7px;\n  border-bottom-right-radius: 7px;\n  border-top-width: calc(0.7504px / 2);\n  width: 54px; }\n\n.timepicker-ui-pm.mobile {\n  border-top-right-radius: 0; }\n\n@media screen and (min-width: 320px) and (max-width: 825px) and (orientation: landscape) {\n  .timepicker-ui-pm {\n    border-bottom-right-radius: 7px;\n    border-top-right-radius: 7px;\n    border-bottom-left-radius: 0;\n    border-bottom-width: 1.5008px;\n    border-left-width: calc(0.7504px / 2);\n    width: 50%;\n    height: 44px; } }\n\n.timepicker-ui-cancel-btn, .timepicker-ui-ok-btn, .timepicker-ui-cancel-btn.mobile, .timepicker-ui-ok.btn-mobile {\n  color: #6200ee;\n  text-transform: uppercase;\n  border-radius: 7px;\n  background-color: transparent;\n  text-align: center;\n  font-size: 15.2px;\n  padding-top: 9px;\n  padding-bottom: 9px;\n  font-weight: 500;\n  transition: all 0.3s ease;\n  cursor: pointer; }\n  .timepicker-ui-cancel-btn:hover, .timepicker-ui-ok-btn:hover, .timepicker-ui-cancel-btn.mobile:hover, .timepicker-ui-ok.btn-mobile:hover {\n    background-color: #d6d6d6; }\n\n.timepicker-ui-cancel-btn, .timepicker-ui-cancel-btn.mobile {\n  width: 72px;\n  margin-right: 4px; }\n\n.timepicker-ui-ok-btn, .timepicker-ui-ok-btn.mobile {\n  width: 64px;\n  margin-left: 4px; }\n\n.timepicker-ui-wrapper-btn, .timepicker-ui-keyboard-icon, .timepicker-ui-wrapper-btn-mobile, .timepicker-ui-keyboard-icon-mobile {\n  display: flex;\n  justify-content: center;\n  align-items: center; }\n\n.timepicker-ui-keyboard-icon-wrapper, .timepicker-ui-keyboard-icon-wrapper.mobile {\n  width: 44px;\n  height: 44px;\n  position: relative;\n  bottom: -26px;\n  left: 12px;\n  transition: all 0.3s ease; }\n  .timepicker-ui-keyboard-icon-wrapper:hover .timepicker-ui-keyboard-icon,\n  .timepicker-ui-keyboard-icon-wrapper:hover .timepicker-ui-keyboard-icon.mobile, .timepicker-ui-keyboard-icon-wrapper.mobile:hover .timepicker-ui-keyboard-icon,\n  .timepicker-ui-keyboard-icon-wrapper.mobile:hover .timepicker-ui-keyboard-icon.mobile {\n    background-color: #d6d6d6;\n    border-radius: 7px; }\n\n.timepicker-ui-keyboard-icon-wrapper.mobile {\n  bottom: -5px; }\n\n.timepicker-ui-keyboard-icon, .timepicker-ui-keyboard-icon.mobile {\n  padding: 12px;\n  cursor: pointer;\n  transition: all 0.3s ease;\n  color: #4e545a;\n  height: 44px;\n  width: 44px; }\n  .timepicker-ui-keyboard-icon:hover, .timepicker-ui-keyboard-icon.mobile:hover {\n    color: #6200ee; }\n\n@media screen and (min-width: 320px) and (max-width: 825px) and (orientation: landscape) {\n  .timepicker-ui-keyboard-icon-wrapper, .timepicker-ui-keyboard-icon-wrapper.mobile {\n    position: absolute;\n    bottom: 8px; } }\n\n.timepicker-ui-wrapper-btn, .timepicker-ui-wrapper-btn.mobile {\n  margin-right: 8px;\n  position: relative;\n  bottom: -14px; }\n\n.timepicker-ui-hour-text, .timepicker-ui-minute-text, .timepicker-ui-hour-text.mobile, .timepicker-ui-minute-text.mobile {\n  position: absolute;\n  bottom: 6px;\n  font-size: 12.8px;\n  color: #a9a9a9;\n  left: 0; }\n\n.timepicker-ui-minute-text, .timepicker-ui-minute-text.mobile {\n  left: 120px; }\n\n.timepicker-ui-clock-hand {\n  position: absolute;\n  background-color: #6200ee;\n  bottom: 50%;\n  height: 40%;\n  left: calc(50% - 1px);\n  transform-origin: center bottom 0;\n  width: 2px; }\n\n.timepicker-ui-clock-hand-24h {\n  height: 23%; }\n\n.timepicker-ui-circle-hand {\n  position: absolute;\n  transform: translate(-48%, -50%);\n  width: 4px;\n  height: 4px;\n  border-radius: 100%;\n  transition: all 0.2s ease;\n  height: 46px;\n  width: 46px;\n  box-sizing: border-box !important;\n  background-color: #6200ee; }\n  .timepicker-ui-circle-hand.small-circle {\n    height: 36px;\n    width: 36px;\n    box-sizing: border-box !important; }\n\n.timepicker-ui-circle-hand-24h {\n  transform: translate(-50%, -50%);\n  height: 32px;\n  width: 32px;\n  top: 4px;\n  left: 1px; }\n\n.timepicker-ui-value-tips, .timepicker-ui-value-tips-24h {\n  width: 100%;\n  height: 100%;\n  display: flex;\n  justify-content: center;\n  align-items: center;\n  transition: 0.3s ease color;\n  border-radius: 50%;\n  outline: none; }\n  .timepicker-ui-value-tips:focus, .timepicker-ui-value-tips-24h:focus {\n    background: rgba(143, 143, 143, 0.315);\n    box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 5px 8px 0px rgba(0, 0, 0, 0.14), 0px 1px 14px 0px rgba(0, 0, 0, 0.12); }\n  .timepicker-ui-value-tips.active, .timepicker-ui-value-tips-24h.active {\n    color: #fff;\n    transition: none; }\n\n.timepicker-ui-clock-animation {\n  animation: clockanimation 350ms linear; }\n\n.timepicker-ui-open-element.disabled {\n  pointer-events: none;\n  touch-action: none;\n  user-select: none; }\n\n.timepicker-ui-tips-animation {\n  transition: transform 400ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, height 400ms cubic-bezier(0.4, 0, 0.2, 1) 0ms; }\n\n.timepicker-ui-tips-disabled {\n  color: rgba(156, 155, 155, 0.6); }\n\n.opacity {\n  transition: opacity 0.15s linear; }\n  .opacity.show {\n    opacity: 1; }\n\n.invalid-value {\n  border-color: #d50000 !important;\n  color: #d50000 !important; }\n  .invalid-value:hover, .invalid-value:focus, .invalid-value:active {\n    border-color: #d50000 !important;\n    color: #d50000 !important; }\n\n@keyframes clockanimation {\n  0% {\n    opacity: 0;\n    transform: scale(0.8); }\n  to {\n    opacity: 1;\n    transform: scale(1); } }\n\n.timepicker-ui-invalid-format {\n  border: 2px solid red;\n  color: red; }\n\n.timepicker-ui-invalid-text {\n  color: red; }\n");
h(":export {\n  cranepurple800: #5c1349;\n  cranepurple900: #4e0d3a;\n  cranepurple700: #71135c;\n  cranered400: #f7363e;\n  white: #fff;\n  purple: #6200ee;\n  opacity: opacity 0.15s linear; }\n\n.timepicker-ui-wrapper.crane-straight, .timepicker-ui-wrapper.mobile.crane-straight {\n  border-radius: 0;\n  background-color: #4e0d3a;\n  color: #fff; }\n  .timepicker-ui-wrapper.crane-straight.radius, .timepicker-ui-wrapper.mobile.crane-straight.radius {\n    border-radius: 1.25rem; }\n\n.timepicker-ui-select-time.crane-straight, .timepicker-ui-select-time.mobile.crane-straight {\n  color: #e5e5e5; }\n\n.timepicker-ui-clock-face.crane-straight, .timepicker-ui-clock-face.mobile.crane-straight {\n  background-color: #71135c; }\n\n.timepicker-ui-dot.crane-straight, .timepicker-ui-dot.mobile.crane-straight {\n  background-color: #f7363e; }\n\n.timepicker-ui-hour.crane-straight, .timepicker-ui-minutes.crane-straight, .timepicker-ui-hour.mobile.crane-straight, .timepicker-ui-minutes.mobile.crane-straight {\n  background-color: #71135c;\n  border-radius: 0;\n  color: #fff; }\n  .timepicker-ui-hour.crane-straight.radius, .timepicker-ui-minutes.crane-straight.radius, .timepicker-ui-hour.mobile.crane-straight.radius, .timepicker-ui-minutes.mobile.crane-straight.radius {\n    border-radius: 1.25rem; }\n  .timepicker-ui-hour.crane-straight:hover, .timepicker-ui-hour.crane-straight.active, .timepicker-ui-minutes.crane-straight:hover, .timepicker-ui-minutes.crane-straight.active, .timepicker-ui-hour.mobile.crane-straight:hover, .timepicker-ui-hour.mobile.crane-straight.active, .timepicker-ui-minutes.mobile.crane-straight:hover, .timepicker-ui-minutes.mobile.crane-straight.active {\n    background-color: #f7363e; }\n\n.timepicker-ui-hour.mobile.crane-straight[contenteditable='true']:focus, .timepicker-ui-hour.mobile.crane-straight[contenteditable='true']:active, .timepicker-ui-minutes.mobile.crane-straight[contenteditable='true']:focus, .timepicker-ui-minutes.mobile.crane-straight[contenteditable='true']:active {\n  border-color: #fff;\n  outline-color: #fff; }\n\n.timepicker-ui-dots.crane-straight, .timepicker-ui-dots.mobile.crane-straight {\n  color: #fff; }\n\n.timepicker-ui-wrapper-type-time.crane-straight, .timepicker-ui-wrapper-type-time.mobile.crane-straight {\n  color: #fff; }\n\n.timepicker-ui-am.crane-straight, .timepicker-ui-pm.crane-straight, .timepicker-ui-am.mobile.crane-straight, .timepicker-ui-pm.mobile.crane-straight {\n  border: 0.125rem solid transparent;\n  border-radius: 0;\n  background-color: #71135c; }\n\n.timepicker-ui-am:hover.crane-straight, .timepicker-ui-am.active.crane-straight, .timepicker-ui-pm:hover.crane-straight, .timepicker-ui-pm.active.crane-straight, .timepicker-ui-am.mobile:hover.crane-straight, .timepicker-ui-am.mobile.active.crane-straight, .timepicker-ui-pm.mobile:hover.crane-straight, .timepicker-ui-pm.mobile.active.crane-straight {\n  color: #fff;\n  background-color: #f7363e; }\n\n.timepicker-ui-am.crane-straight.radius {\n  border-top-left-radius: 1.25rem;\n  border-top-right-radius: 1.25rem; }\n\n.timepicker-ui-pm.crane-straight.radius {\n  border-bottom-left-radius: 1.25rem;\n  border-bottom-right-radius: 1.25rem; }\n\n@media screen and (min-width: 320px) and (max-width: 826px) and (orientation: landscape) {\n  .timepicker-ui-am.crane-straight.radius {\n    border-bottom-left-radius: 1.25rem;\n    border-top-right-radius: 0;\n    border-bottom-right-radius: 0; } }\n\n@media screen and (min-width: 320px) and (max-width: 826px) and (orientation: landscape) {\n  .timepicker-ui-pm.crane-straight.radius {\n    border-bottom-right-radius: 1.25rem;\n    border-top-right-radius: 1.25rem;\n    border-bottom-left-radius: 0;\n    border-top-left-radius: 0; } }\n\n@media screen and (min-width: 320px) and (max-width: 767px) and (orientation: landscape) {\n  .timepicker-ui-am.mobile.crane-straight.radius {\n    border-bottom-left-radius: 0rem;\n    border-bottom-right-radius: 0rem; } }\n\n@media screen and (min-width: 320px) and (max-width: 767px) and (orientation: landscape) {\n  .timepicker-ui-pm.mobile.crane-straight.radius {\n    border-top-left-radius: 0rem;\n    border-top-right-radius: 0rem; } }\n\n.timepicker-ui-cancel-btn.crane-straight, .timepicker-ui-ok-btn.crane-straight, .timepicker-ui-cancel-btn.mobile.crane-straight, .timepicker-ui-ok-btn.mobile.crane-straight {\n  color: #fff;\n  border-radius: 0rem; }\n  .timepicker-ui-cancel-btn.crane-straight.radius, .timepicker-ui-ok-btn.crane-straight.radius, .timepicker-ui-cancel-btn.mobile.crane-straight.radius, .timepicker-ui-ok-btn.mobile.crane-straight.radius {\n    border-radius: 0.8125rem; }\n\n.timepicker-ui-cancel-btn:hover.crane-straight, .timepicker-ui-ok-btn:hover.crane-straight, .timepicker-ui-cancel-btn.mobile:hover.crane-straight, .timepicker-ui-ok-btn.mobile:hover.crane-straight {\n  background-color: #f7363e; }\n\n.timepicker-ui-keyboard-icon-wrapper.crane-straight, .timepicker-ui-keyboard-icon-wrapper.mobile.crane-straight {\n  color: #fff; }\n  .timepicker-ui-keyboard-icon-wrapper.crane-straight.radius, .timepicker-ui-keyboard-icon-wrapper.mobile.crane-straight.radius {\n    border-radius: 1.25rem; }\n\n.timepicker-ui-keyboard-icon-wrapper.crane-straight:hover .timepicker-ui-keyboard-icon,\n.timepicker-ui-keyboard-icon-wrapper.crane-straight:hover .timepicker-ui-keyboard-icon.mobile, .timepicker-ui-keyboard-icon-wrapper.mobile.crane-straight:hover .timepicker-ui-keyboard-icon,\n.timepicker-ui-keyboard-icon-wrapper.mobile.crane-straight:hover .timepicker-ui-keyboard-icon.mobile {\n  background-color: #f7363e;\n  color: #fff;\n  border-radius: 0; }\n\n.timepicker-ui-keyboard-icon-wrapper.crane-straight.radius:hover .timepicker-ui-keyboard-icon,\n.timepicker-ui-keyboard-icon-wrapper.crane-straight.radius:hover .timepicker-ui-keyboard-icon.mobile, .timepicker-ui-keyboard-icon-wrapper.mobile.crane-straight.radius:hover .timepicker-ui-keyboard-icon,\n.timepicker-ui-keyboard-icon-wrapper.mobile.crane-straight.radius:hover .timepicker-ui-keyboard-icon.mobile {\n  border-radius: 0.875rem; }\n\n.timepicker-ui-keyboard-icon.crane-straight:hover, .timepicker-ui-keyboard-icon.mobile.crane-straight:hover {\n  color: #fff; }\n  .timepicker-ui-keyboard-icon.crane-straight:hover.radius, .timepicker-ui-keyboard-icon.mobile.crane-straight:hover.radius {\n    border-radius: 1.25rem; }\n\n.timepicker-ui-clock-hand.crane-straight {\n  background-color: #f7363e; }\n\n.timepicker-ui-circle-hand.crane-straight {\n  border-color: #f7363e;\n  background-color: #f7363e; }\n\n.timepicker-ui-value-tips.crane-straight {\n  color: #fff; }\n");
var m = ":export {\n  cranepurple800: #5c1349;\n  cranepurple900: #4e0d3a;\n  cranepurple700: #71135c;\n  cranered400: #f7363e;\n  white: #fff;\n  purple: #6200ee;\n  opacity: opacity 0.15s linear; }\n";
h(m);
const v = {
    amLabel: "AM",
    animation: !0,
    appendModalSelector: "",
    backdrop: !0,
    cancelLabel: "CANCEL",
    editable: !1,
    enableScrollbar: !1,
    enableSwitchIcon: !1,
    mobileTimeLabel: "Enter Time",
    focusInputAfterCloseModal: !1,
    hourMobileLabel: "Hour",
    iconTemplate: '<i class="material-icons timepicker-ui-keyboard-icon">keyboard</i>',
    iconTemplateMobile: '<i class="material-icons timepicker-ui-keyboard-icon">schedule</i>',
    incrementHours: 1,
    incrementMinutes: 1,
    minuteMobileLabel: "Minute",
    mobile: !1,
    okLabel: "OK",
    pmLabel: "PM",
    timeLabel: "Select Time",
    switchToMinutesAfterSelectHour: !1,
    theme: "basic",
    preventDefault: !0,
    clockType: "12h",
    disabledTime: void 0,
    currentTime: void 0,
    focusTrap: !0
}, b = "mousedown mouseup mousemove mouseleave mouseover".concat(" touchstart touchmove touchend"), k = ["00", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23"], g = ["12", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11"], _ = ["00", "05", "10", "15", "20", "25", "30", "35", "40", "45", "50", "55"];
class T {
    constructor(e) {
        this.clean = ()=> {
            var e, i;
            const t = null === (e = this.tipsWrapper) || void 0 === e ? void 0 : e.querySelectorAll("span.timepicker-ui-hour-time-12"), n = null === (i = this.tipsWrapper) || void 0 === i ? void 0 : i.querySelectorAll("span.timepicker-ui-minutes-time");
            this._removeClasses(t), this._removeClasses(n)
        }, this.create = ()=> {
            var e;
            if (!(this.clockFace && this.array && this.classToAdd && this.tipsWrapper))return;
            const i = (this.clockFace.offsetWidth - 32) / 2, n = (this.clockFace.offsetHeight - 32) / 2, o = i - 9;
            this.tipsWrapper.innerHTML = "", null === (e = this.array) || void 0 === e || e.forEach(((e, r)=> {
                var s, a, l, d, u, c;
                const p = r * (360 / this.array.length) * (Math.PI / 180);
                const h = document.createElement("span"), m = document.createElement("span");
                m.innerHTML = e, this.disabledTime && (Array.isArray(this.disabledTime) && (null === (s = this.disabledTime) || void 0 === s ? void 0 : s.includes(e)) && (m.classList.add("timepicker-ui-tips-disabled"), h.classList.add("timepicker-ui-tips-disabled")), this.hour === this.disabledTime.removedStartedHour && (null === (l = null === (a = this.disabledTime) || void 0 === a ? void 0 : a.startMinutes) || void 0 === l ? void 0 : l.includes(e)) && (m.classList.add("timepicker-ui-tips-disabled"), h.classList.add("timepicker-ui-tips-disabled"), m.tabIndex = -1), this.hour === this.disabledTime.removedEndHour && (null === (u = null === (d = this.disabledTime) || void 0 === d ? void 0 : d.endMinutes) || void 0 === u ? void 0 : u.includes(e)) && (m.classList.add("timepicker-ui-tips-disabled"), h.classList.add("timepicker-ui-tips-disabled"), m.tabIndex = -1)), "24h" === this.clockType ? (m.classList.add("timepicker-ui-value-tips-24h"), t(m, "timepicker-ui-tips-disabled") || (m.tabIndex = 0)) : (m.classList.add("timepicker-ui-value-tips"), t(m, "timepicker-ui-tips-disabled") || (m.tabIndex = 0)), h.classList.add(this.classToAdd), "crane-straight" === this.theme && (h.classList.add("crane-straight"), m.classList.add("crane-straight")), h.style.left = i + Math.sin(p) * o - h.offsetWidth + "px", h.style.bottom = n + Math.cos(p) * o - h.offsetHeight + "px", h.appendChild(m), null === (c = this.tipsWrapper) || void 0 === c || c.appendChild(h)
            }))
        }, this.updateDisable = e=> {
            var i, t;
            const n = null === (i = this.tipsWrapper) || void 0 === i ? void 0 : i.querySelectorAll("span.timepicker-ui-hour-time-12"), o = null === (t = this.tipsWrapper) || void 0 === t ? void 0 : t.querySelectorAll("span.timepicker-ui-minutes-time");
            if (this._removeClasses(n), this._removeClasses(o), (null == e ? void 0 : e.hoursToUpdate) && n && this._addClassesWithIncludes(n, e.hoursToUpdate), (null == e ? void 0 : e.minutesToUpdate) && o) {
                const {actualHour:i,removedEndHour:t,removedStartedHour:n,startMinutes:r,endMinutes:s}=e.minutesToUpdate;
                t === i && s.length > 0 ? this._addClassesWithIncludes(o, s) : Number(i) > Number(n) && Number(i) < Number(t) && this._addClasses(o), n === i && r.length > 0 ? this._addClassesWithIncludes(o, r) : Number(i) > Number(n) && Number(i) < Number(t) && this._addClasses(o)
            }
            if (e) {
                const {amHours:i,pmHours:t,activeMode:r,startMinutes:s,endMinutes:a,removedAmHour:l,removedPmHour:d,actualHour:u}=e.minutesToUpdate;
                if (!i || !t)return;
                n && (i && "AM" === r && this._addClassesWithIncludes(n, i), t && "PM" === r && this._addClassesWithIncludes(n, t)), o && s && a && ("AM" === r && ("00" === a[0] && 1 === a.length && 0 === s.length && Number(u) >= Number(i[0]) && this._addClasses(o), 0 === s.length && a.length > 1 && Number(u) >= Number(l) && this._addClasses(o), s.length > 0 && a.length > 1 && "00" === a[0] && (Number(l) === Number(u) ? this._addClassesWithIncludes(o, s) : Number(u) > Number(l) && this._addClasses(o)), "00" === a[0] && 1 === a.length && s.length > 0 && (Number(l) === Number(u) ? this._addClassesWithIncludes(o, s) : Number(u) > Number(l) && this._addClasses(o))), "PM" === r && (u < Number(d) && this._addClasses(o), u === d && this._addClassesWithIncludes(o, a), a.length > 0 && Number(u) === d - 1 && this._addClassesWithIncludes(o, a)))
            }
        }, this._removeClasses = e=> {
            null == e || e.forEach((({classList:e,children:i})=> {
                e.remove("timepicker-ui-tips-disabled"), i[0].classList.remove("timepicker-ui-tips-disabled"), i[0].tabIndex = 0
            }))
        }, this._addClasses = e=> {
            null == e || e.forEach((({classList:e,children:i})=> {
                e.add("timepicker-ui-tips-disabled"), i[0].classList.add("timepicker-ui-tips-disabled"), i[0].tabIndex = -1
            }))
        }, this._addClassesWithIncludes = (e, i)=> {
            null == e || e.forEach((({classList:e,children:t,textContent:n})=> {
                (null == i ? void 0 : i.includes(n)) && (e.add("timepicker-ui-tips-disabled"), t[0].classList.add("timepicker-ui-tips-disabled"), t[0].tabIndex = -1)
            }))
        }, this.array = null == e ? void 0 : e.array, this.classToAdd = null == e ? void 0 : e.classToAdd, this.clockFace = null == e ? void 0 : e.clockFace, this.tipsWrapper = null == e ? void 0 : e.tipsWrapper, this.theme = null == e ? void 0 : e.theme, this.clockType = null == e ? void 0 : e.clockType, this.disabledTime = null == e ? void 0 : e.disabledTime, this.hour = null == e ? void 0 : e.hour
    }
}
exports.TimepickerUI = class {
    constructor(s, a) {
        var h, y, f;
        this.create = ()=> {
            this._updateInputValueWithCurrentTimeOnStart(), this._checkDisabledValuesOnStart(), this._setTimepickerClassToElement(), this._setInputClassToInputElement(), this._setDataOpenToInputIfDosentExistInWrapper(), this._setClassTopOpenElement(), this._handleOpenOnEnterFocus(), this._handleOpenOnClick(), this._getDisableTime()
        }, this.open = e=> {
            this.create(), this._eventsBundle(), l(e)
        }, this.close = (...e)=> {
            var i;
            if (e.length > 2 || !this.modalElement)return;
            const [t]=e.filter((e=>"boolean" == typeof e)), [n]=e.filter((e=>"function" == typeof e));
            t && (this._handleOkButton(), null === (i = this.okButton) || void 0 === i || i.click()), this._isTouchMouseMove = !1, b.split(" ").map((e=>document.removeEventListener(e, this._mutliEventsMoveHandler, !1))), document.removeEventListener("mousedown", this._eventsClickMobileHandler), document.removeEventListener("touchstart", this._eventsClickMobileHandler), document.removeEventListener("keypress", this._handleEscClick), this.wrapper.removeEventListener("keydown", this._focusTrapHandler), this._options.enableSwitchIcon && (this.keyboardClockIcon.removeEventListener("touchstart", this._handlerViewChange), this.keyboardClockIcon.removeEventListener("mousedown", this._handlerViewChange)), this._removeAnimationToClose(), this.openElement.forEach((e=>null == e ? void 0 : e.classList.remove("disabled"))), setTimeout((()=> {
                document.body.style.overflowY = "", document.body.style.paddingRight = ""
            }), 400), setTimeout((()=> {
                var e;
                this.openElement.forEach((e=>null == e ? void 0 : e.classList.remove("disabled"))), this._options.focusInputAfterCloseModal && (null === (e = this.input) || void 0 === e || e.focus()), null !== this.modalElement && this.modalElement.remove()
            }), 300), l(n)
        }, this.destroy = e=> {
            b.split(" ").map((e=>document.removeEventListener(e, this._mutliEventsMoveHandler, !1))), document.removeEventListener("mousedown", this._eventsClickMobileHandler), document.removeEventListener("touchstart", this._eventsClickMobileHandler), this._options.enableSwitchIcon && this.keyboardClockIcon && (this.keyboardClockIcon.removeEventListener("touchstart", this._handlerViewChange), this.keyboardClockIcon.removeEventListener("mousedown", this._handlerViewChange)), this._cloned = this._element.cloneNode(!0), this._element.after(this._cloned), this._element.remove(), this._element = null, null === this._element && l(e), this._element = this._cloned
        }, this.update = (e, i)=> {
            this._options = Object.assign(Object.assign({}, this._options), e.options), this._checkMobileOption(), e.create && this.create(), l(i)
        }, this._preventClockTypeByCurrentTime = ()=> {
            var e, i, t, n, o;
            if ("boolean" != typeof(null === (e = this._options) || void 0 === e ? void 0 : e.currentTime) && (null === (t = null === (i = this._options) || void 0 === i ? void 0 : i.currentTime) || void 0 === t ? void 0 : t.preventClockType) || "boolean" == typeof(null === (n = this._options) || void 0 === n ? void 0 : n.currentTime) && (null === (o = this._options) || void 0 === o ? void 0 : o.currentTime)) {
                const {currentTime:e,clockType:i}=this._options, {type:t}=u(this.input, i, e, !0);
                this._options.clockType = t ? "12h" : "24h"
            }
        }, this._updateInputValueWithCurrentTimeOnStart = ()=> {
            var e, i, t, n, o;
            if ("boolean" != typeof(null === (e = this._options) || void 0 === e ? void 0 : e.currentTime) && (null === (t = null === (i = this._options) || void 0 === i ? void 0 : i.currentTime) || void 0 === t ? void 0 : t.updateInput) || "boolean" == typeof(null === (n = this._options) || void 0 === n ? void 0 : n.currentTime) && (null === (o = this._options) || void 0 === o ? void 0 : o.currentTime)) {
                const {hour:e,minutes:i,type:t}=u(this.input, this._options.clockType, this._options.currentTime);
                this.input.value = t ? `${e}:${i} ${t}` : `${e}:${i}`
            }
        }, this._setTheme = ()=> {
            var e;
            const i = null === (e = this.modalElement) || void 0 === e ? void 0 : e.querySelectorAll("div"), {theme:t}=this._options;
            "crane-straight" === t ? i.forEach((e=>e.classList.add("crane-straight"))) : "crane-radius" === t && i.forEach((e=>e.classList.add("crane-straight", "radius")))
        }, this._setInputClassToInputElement = ()=> {
            var e;
            t(this.input, "timepicker-ui-input") || null === (e = this.input) || void 0 === e || e.classList.add("timepicker-ui-input")
        }, this._setDataOpenToInputIfDosentExistInWrapper = ()=> {
            var e;
            null === this.openElementData && (null === (e = this.input) || void 0 === e || e.setAttribute("data-open", "timepicker-ui-input"))
        }, this._setClassTopOpenElement = ()=> {
            this.openElement.forEach((e=>null == e ? void 0 : e.classList.add("timepicker-ui-open-element")))
        }, this._removeBackdrop = ()=> {
            var e;
            this._options.backdrop || (null === (e = this.modalElement) || void 0 === e || e.classList.add("removed"), this.openElement.forEach((e=>null == e ? void 0 : e.classList.add("disabled"))))
        }, this._setNormalizeClass = ()=> {
            var e, i;
            const t = null === (e = this.modalElement) || void 0 === e ? void 0 : e.querySelectorAll("div");
            null === (i = this.modalElement) || void 0 === i || i.classList.add("timepicker-ui-normalize"), null == t || t.forEach((e=>e.classList.add("timepicker-ui-normalize")))
        }, this._setFlexEndToFooterIfNoKeyboardIcon = ()=> {
            !this._options.enableSwitchIcon && this.footer && (this.footer.style.justifyContent = "flex-end")
        }, this._eventsBundle = ()=> {
            var e, i, t, n, o, r, s, a, l, d, u, c, p;
            if (this._handleEscClick(), this._setErrorHandler(), this._removeErrorHandler(), this.openElement.forEach((e=>null == e ? void 0 : e.classList.add("disabled"))), null === (e = this.input) || void 0 === e || e.blur(), this._setScrollbarOrNot(), this._setModalTemplate(), this._setNormalizeClass(), this._removeBackdrop(), this._setBgColorToCirleWithHourTips(), this._setOnStartCSSClassesIfClockType24h(), this._setClassActiveToHourOnOpen(), null !== this.clockFace) {
                const e = new T({
                    array: g,
                    classToAdd: "timepicker-ui-hour-time-12",
                    clockFace: this.clockFace,
                    tipsWrapper: this.tipsWrapper,
                    theme: this._options.theme,
                    disabledTime: (null === (t = null === (i = this._disabledTime) || void 0 === i ? void 0 : i.value) || void 0 === t ? void 0 : t.isInterval) ? null === (n = this._disabledTime) || void 0 === n ? void 0 : n.value.rangeArrHour : null === (r = null === (o = this._disabledTime) || void 0 === o ? void 0 : o.value) || void 0 === r ? void 0 : r.hours,
                    clockType: "12h",
                    hour: this.hour.textContent
                });
                if (e.create(), "24h" === this._options.clockType) {
                    new T({
                        array: k,
                        classToAdd: "timepicker-ui-hour-time-24",
                        clockFace: this.tipsWrapperFor24h,
                        tipsWrapper: this.tipsWrapperFor24h,
                        theme: this._options.theme,
                        clockType: "24h",
                        disabledTime: (null === (a = null === (s = this._disabledTime) || void 0 === s ? void 0 : s.value) || void 0 === a ? void 0 : a.isInterval) ? null === (l = this._disabledTime) || void 0 === l ? void 0 : l.value.rangeArrHour : null === (u = null === (d = this._disabledTime) || void 0 === d ? void 0 : d.value) || void 0 === u ? void 0 : u.hours,
                        hour: this.hour.textContent
                    }).create()
                } else(null === (c = this._disabledTime) || void 0 === c ? void 0 : c.value.startType) === (null === (p = this._disabledTime) || void 0 === p ? void 0 : p.value.endType) ? setTimeout((()=> {
                    var i, t, n, o, r, s, a, l;
                    (null === (i = this._disabledTime) || void 0 === i ? void 0 : i.value.startType) === (null === (t = this.activeTypeMode) || void 0 === t ? void 0 : t.textContent) && e.updateDisable({
                        hoursToUpdate: null === (o = null === (n = this._disabledTime) || void 0 === n ? void 0 : n.value) || void 0 === o ? void 0 : o.rangeArrHour,
                        minutesToUpdate: {
                            endMinutes: null === (r = this._disabledTime) || void 0 === r ? void 0 : r.value.endMinutes,
                            removedEndHour: null === (s = this._disabledTime) || void 0 === s ? void 0 : s.value.removedEndHour,
                            removedStartedHour: null === (a = this._disabledTime) || void 0 === a ? void 0 : a.value.removedStartedHour,
                            actualHour: this.hour.textContent,
                            startMinutes: null === (l = this._disabledTime) || void 0 === l ? void 0 : l.value.startMinutes
                        }
                    })
                }), 300) : setTimeout((()=> {
                    var i, t, n;
                    e.updateDisable({
                        minutesToUpdate: {
                            actualHour: this.hour.textContent,
                            pmHours: null === (i = this._disabledTime) || void 0 === i ? void 0 : i.value.pmHours,
                            amHours: null === (t = this._disabledTime) || void 0 === t ? void 0 : t.value.amHours,
                            activeMode: null === (n = this.activeTypeMode) || void 0 === n ? void 0 : n.textContent
                        }
                    })
                }), 300), e.updateDisable()
            }
            this._setFlexEndToFooterIfNoKeyboardIcon(), setTimeout((()=> {
                this._setTheme()
            }), 0), this._setAnimationToOpen(), this._getInputValueOnOpenAndSet(), this._toggleClassActiveToValueTips(this.hour.textContent), this._isMobileView || (this._setTransformToCircleWithSwitchesHour(this.hour.textContent), this._handleAnimationClock()), this._handleMinutesClick(), this._handleHourClick(), "24h" !== this._options.clockType && (this._handleAmClick(), this._handlePmClick()), this._handleMoveHand(), this._handleCancelButton(), this._handleOkButton(), this._handleBackdropClick(), this._handleIconChangeView(), this._handleClickOnHourMobile(), this._options.focusTrap && this._focusTrapHandler()
        }, this._handleOpenOnClick = ()=> {
            this.openElement.forEach((e=>this._clickTouchEvents.map((i=>null == e ? void 0 : e.addEventListener(i, (()=>this._eventsBundle()))))))
        }, this._getInputValueOnOpenAndSet = ()=> {
            var e, i;
            const t = u(this.input, this._options.clockType, this._options.currentTime);
            if (void 0 === t)return this.hour.innerText = "12", this.minutes.innerText = "00", n(this._element, "show", {
                hour: this.hour.textContent,
                minutes: this.minutes.textContent,
                type: null === (e = this.activeTypeMode) || void 0 === e ? void 0 : e.dataset.type,
                degreesHours: this._degreesHours,
                degreesMinutes: this._degreesMinutes
            }), void("24h" !== this._options.clockType && this.AM.classList.add("active"));
            let [o,r,s]=this.input.value.split(":").join(" ").split(" ");
            0 === this.input.value.length && (o = t.hour, r = t.minutes, s = t.type), this.hour.innerText = o, this.minutes.innerText = r;
            const a = document.querySelector(`[data-type='${s}']`);
            "24h" !== this._options.clockType && a && a.classList.add("active"), n(this._element, "show", Object.assign(Object.assign({}, t), {
                type: null === (i = this.activeTypeMode) || void 0 === i ? void 0 : i.dataset.type,
                degreesHours: this._degreesHours,
                degreesMinutes: this._degreesMinutes
            }))
        }, this._handleCancelButton = ()=> {
            this._clickTouchEvents.forEach((e=> {
                this.cancelButton.addEventListener(e, (()=> {
                    var e;
                    const i = u(this.input, this._options.clockType);
                    n(this._element, "cancel", Object.assign(Object.assign({}, i), {
                        hourNotAccepted: this.hour.textContent,
                        minutesNotAccepted: this.minutes.textContent,
                        type: null === (e = this.activeTypeMode) || void 0 === e ? void 0 : e.dataset.type,
                        degreesHours: this._degreesHours,
                        degreesMinutes: this._degreesMinutes
                    })), this.close()
                }))
            }))
        }, this._handleOkButton = ()=> {
            this._clickTouchEvents.forEach((e=> {
                var i;
                null === (i = this.okButton) || void 0 === i || i.addEventListener(e, (()=> {
                    var e, i, t;
                    const {clockType:o,disabledTime:r}=this._options, s = c(this.hour.textContent, "hour", o), a = c(this.minutes.textContent, "minutes", o);
                    let l;
                    const u = p(this.hour.textContent, "hour", o, null == r ? void 0 : r.hours), h = p(this.minutes.textContent, "minutes", o, null == r ? void 0 : r.minutes);
                    if ((null == r ? void 0 : r.interval) && (l = ((e, i, t, n)=> {
                            const o = t ? d(`${e}:${i} ${t}`.trim()) : `${e}:${i}`.trim();
                            let r, s;
                            if (t) {
                                const [e,i]=n.trim().split("-").map((e=>e.trim()));
                                r = d(e), s = d(i)
                            } else {
                                const [e,i]=n.trim().split("-"), t = e=>e.trim().split(":").map((e=>Number(e) <= 9 ? `0${Number(e)}` : e)).join(":");
                                r = t(e), s = t(i)
                            }
                            return o < r || o > s
                        })(this.hour.textContent, this.minutes.textContent, null === (e = this.activeTypeMode) || void 0 === e ? void 0 : e.textContent, r.interval)), !1 === l || !1 === s || !1 === a || !1 === u || !1 === h)return !1 !== l && a && h || this.minutes.classList.add("invalid-value"), void(!1 !== l && s && u || this.hour.classList.add("invalid-value"));
                    this.input.value = `${this.hour.textContent}:${this.minutes.textContent} ${"24h" === this._options.clockType ? "" : null === (i = this.activeTypeMode) || void 0 === i ? void 0 : i.dataset.type}`.trimEnd(), n(this._element, "accept", {
                        hour: this.hour.textContent,
                        minutes: this.minutes.textContent,
                        type: null === (t = this.activeTypeMode) || void 0 === t ? void 0 : t.dataset.type,
                        degreesHours: this._degreesHours,
                        degreesMinutes: this._degreesMinutes
                    }), this.close()
                }))
            }))
        }, this._handleBackdropClick = ()=> {
            this._clickTouchEvents.forEach((e=> {
                var i;
                null === (i = this.modalElement) || void 0 === i || i.addEventListener(e, (e=> {
                    var i;
                    const o = e.target;
                    if (!t(o, "timepicker-ui-modal"))return;
                    const r = u(this.input, this._options.clockType);
                    n(this._element, "cancel", Object.assign(Object.assign({}, r), {
                        hourNotAccepted: this.hour.textContent,
                        minutesNotAccepted: this.minutes.textContent,
                        type: null === (i = this.activeTypeMode) || void 0 === i ? void 0 : i.dataset.type,
                        degreesHours: this._degreesHours,
                        degreesMinutes: this._degreesMinutes
                    })), this.close()
                }))
            }))
        }, this._setBgColorToCirleWithHourTips = ()=> {
            if (!this._options)return;
            const {mobile:e,theme:i}=this._options;
            e || null === this.circle || (this.circle.style.backgroundColor = "crane-straight" === i || "crane-radius" === i ? m.cranered400 : m.purple)
        }, this._setBgColorToCircleWithMinutesTips = ()=> {
            const {theme:e}=this._options;
            this.minutes.textContent && _.includes(this.minutes.textContent) && (this.circle.style.backgroundColor = "crane-straight" === e || "crane-radius" === e ? m.cranered400 : m.purple, this.circle.classList.remove("small-circle"))
        }, this._removeBgColorToCirleWithMinutesTips = ()=> {
            this.minutes.textContent && _.includes(this.minutes.textContent) || (this.circle.style.backgroundColor = "", this.circle.classList.add("small-circle"))
        }, this._setTimepickerClassToElement = ()=> {
            var e;
            null === (e = this._element) || void 0 === e || e.classList.add("timepicker-ui")
        }, this._setClassActiveToHourOnOpen = ()=> {
            var e;
            this._options.mobile || this._isMobileView || null === (e = this.hour) || void 0 === e || e.classList.add("active")
        }, this._setMinutesToClock = e=> {
            var i, t, n, o, r;
            null !== this.clockFace && this._setTransformToCircleWithSwitchesMinutes(e), this._removeBgColorToCirleWithMinutesTips();
            const s = (null === (t = null === (i = this._disabledTime) || void 0 === i ? void 0 : i.value) || void 0 === t ? void 0 : t.minutes) ? null === (o = null === (n = this._disabledTime) || void 0 === n ? void 0 : n.value) || void 0 === o ? void 0 : o.minutes : null === (r = this._disabledTime) || void 0 === r ? void 0 : r.value, a = new T({
                array: _,
                classToAdd: "timepicker-ui-minutes-time",
                clockFace: this.clockFace,
                tipsWrapper: this.tipsWrapper,
                theme: this._options.theme,
                disabledTime: s,
                hour: this.hour.textContent,
                clockType: this._options.clockType
            });
            a.create(), "12h" === this._options.clockType && a.updateDisable(), this._toggleClassActiveToValueTips(e), "24h" === this._options.clockType && (this.tipsWrapperFor24h.innerHTML = "")
        }, this._setHoursToClock = e=> {
            var i, t, n, o, r;
            if (null !== this.clockFace) {
                this._setTransformToCircleWithSwitchesHour(e), this._setBgColorToCirleWithHourTips();
                const s = (null === (t = null === (i = this._disabledTime) || void 0 === i ? void 0 : i.value) || void 0 === t ? void 0 : t.isInterval) ? null === (n = this._disabledTime) || void 0 === n ? void 0 : n.value.rangeArrHour : null === (r = null === (o = this._disabledTime) || void 0 === o ? void 0 : o.value) || void 0 === r ? void 0 : r.hours, a = new T({
                    array: g,
                    classToAdd: "timepicker-ui-hour-time-12",
                    clockFace: this.clockFace,
                    tipsWrapper: this.tipsWrapper,
                    theme: this._options.theme,
                    disabledTime: s,
                    clockType: "12h",
                    hour: this.hour.textContent
                });
                a.create(), "24h" === this._options.clockType ? new T({
                    array: k,
                    classToAdd: "timepicker-ui-hour-time-24",
                    clockFace: this.tipsWrapperFor24h,
                    tipsWrapper: this.tipsWrapperFor24h,
                    theme: this._options.theme,
                    clockType: "24h",
                    disabledTime: s,
                    hour: this.hour.textContent
                }).create() : a.updateDisable(), this._toggleClassActiveToValueTips(e)
            }
        }, this._setTransformToCircleWithSwitchesHour = e=> {
            const i = Number(e);
            let t = i > 12 ? 30 * i - 360 : 30 * i;
            360 === t && (t = 0), t > 360 || (this.clockHand.style.transform = `rotateZ(${t}deg)`)
        }, this._setTransformToCircleWithSwitchesMinutes = e=> {
            const i = 6 * Number(e);
            i > 360 || (this.clockHand.style.transform = `rotateZ(${i}deg)`)
        }, this._handleAmClick = ()=> {
            this._clickTouchEvents.forEach((e=> {
                this.AM.addEventListener(e, (e=> {
                    var i, o, r, s;
                    if (e.target.classList.add("active"), this.PM.classList.remove("active"), "12h" === this._options.clockType && (null === (i = this._options.disabledTime) || void 0 === i ? void 0 : i.interval)) {
                        const e = new T({
                            clockFace: this.clockFace,
                            tipsWrapper: this.tipsWrapper,
                            array: t(this.hour, "active") ? g : _
                        });
                        (null === (o = this._disabledTime) || void 0 === o ? void 0 : o.value.startType) === (null === (r = this._disabledTime) || void 0 === r ? void 0 : r.value.endType) ? setTimeout((()=> {
                            var i, t, n, o;
                            (null === (i = this._disabledTime) || void 0 === i ? void 0 : i.value.startType) === (null === (t = this.activeTypeMode) || void 0 === t ? void 0 : t.textContent) ? e.updateDisable(Object.assign({hoursToUpdate: null === (o = null === (n = this._disabledTime) || void 0 === n ? void 0 : n.value) || void 0 === o ? void 0 : o.rangeArrHour}, this._getDestructuringObj())) : e.clean()
                        }), 300) : setTimeout((()=> {
                            e.updateDisable(Object.assign({}, this._getDestructuringObj(!0)))
                        }), 300), e.updateDisable()
                    }
                    n(this._element, "selectamtypemode", {
                        hour: this.hour.textContent,
                        minutes: this.minutes.textContent,
                        type: null === (s = this.activeTypeMode) || void 0 === s ? void 0 : s.dataset.type,
                        degreesHours: this._degreesHours,
                        degreesMinutes: this._degreesMinutes
                    })
                }))
            }))
        }, this._handlePmClick = ()=> {
            this._clickTouchEvents.forEach((e=> {
                this.PM.addEventListener(e, (e=> {
                    var i, o, r, s;
                    if (e.target.classList.add("active"), this.AM.classList.remove("active"), "12h" === this._options.clockType && (null === (i = this._options.disabledTime) || void 0 === i ? void 0 : i.interval)) {
                        const e = new T({
                            clockFace: this.clockFace,
                            tipsWrapper: this.tipsWrapper,
                            array: t(this.hour, "active") ? g : _
                        });
                        (null === (o = this._disabledTime) || void 0 === o ? void 0 : o.value.startType) === (null === (r = this._disabledTime) || void 0 === r ? void 0 : r.value.endType) ? setTimeout((()=> {
                            var i, t, n, o;
                            (null === (i = this._disabledTime) || void 0 === i ? void 0 : i.value.startType) === (null === (t = this.activeTypeMode) || void 0 === t ? void 0 : t.textContent) ? e.updateDisable(Object.assign({hoursToUpdate: null === (o = null === (n = this._disabledTime) || void 0 === n ? void 0 : n.value) || void 0 === o ? void 0 : o.rangeArrHour}, this._getDestructuringObj())) : e.clean()
                        }), 300) : setTimeout((()=> {
                            e.updateDisable(Object.assign({}, this._getDestructuringObj(!0)))
                        }), 300)
                    }
                    n(this._element, "selectpmtypemode", {
                        hour: this.hour.textContent,
                        minutes: this.minutes.textContent,
                        type: null === (s = this.activeTypeMode) || void 0 === s ? void 0 : s.dataset.type,
                        degreesHours: this._degreesHours,
                        degreesMinutes: this._degreesMinutes
                    })
                }))
            }))
        }, this._handleAnimationClock = ()=> {
            this._options.animation && setTimeout((()=> {
                this.clockFace.classList.add("timepicker-ui-clock-animation"), setTimeout((()=> {
                    var e;
                    null === (e = this.clockFace) || void 0 === e || e.classList.remove("timepicker-ui-clock-animation")
                }), 600)
            }), 150)
        }, this._handleAnimationSwitchTipsMode = ()=> {
            this.clockHand.classList.add("timepicker-ui-tips-animation"), setTimeout((()=> {
                var e;
                null === (e = this.clockHand) || void 0 === e || e.classList.remove("timepicker-ui-tips-animation")
            }), 401)
        }, this._handleHourClick = ()=> {
            this._clickTouchEvents.forEach((e=> {
                var i;
                null === (i = this.hour) || void 0 === i || i.addEventListener(e, (e=> {
                    var i, o, r, s, a;
                    const l = e.target;
                    if (null !== this.clockFace && this._handleAnimationSwitchTipsMode(), "24h" === this._options.clockType && ((Number(l.textContent) > 12 || "00" === l.textContent) && this._setCircleClockClasses24h(), this._options.mobile || null === (i = this.tipsWrapperFor24h) || void 0 === i || i.classList.remove("timepicker-ui-tips-wrapper-24h-disabled")), this._setHoursToClock(l.textContent), l.classList.add("active"), this.minutes.classList.remove("active"), "12h" === this._options.clockType && (null === (o = this._options.disabledTime) || void 0 === o ? void 0 : o.interval)) {
                        const e = new T({
                            clockFace: this.clockFace,
                            tipsWrapper: this.tipsWrapper,
                            array: t(this.hour, "active") ? g : _
                        });
                        (null === (r = this._disabledTime) || void 0 === r ? void 0 : r.value.startType) === (null === (s = this._disabledTime) || void 0 === s ? void 0 : s.value.endType) ? setTimeout((()=> {
                            var i, t, n, o;
                            (null === (i = this._disabledTime) || void 0 === i ? void 0 : i.value.startType) === (null === (t = this.activeTypeMode) || void 0 === t ? void 0 : t.textContent) ? e.updateDisable(Object.assign({hoursToUpdate: null === (o = null === (n = this._disabledTime) || void 0 === n ? void 0 : n.value) || void 0 === o ? void 0 : o.rangeArrHour}, this._getDestructuringObj())) : e.clean()
                        }), 300) : setTimeout((()=> {
                            e.updateDisable(Object.assign({}, this._getDestructuringObj(!0)))
                        }), 300)
                    }
                    n(this._element, "selecthourmode", {
                        hour: this.hour.textContent,
                        minutes: this.minutes.textContent,
                        type: null === (a = this.activeTypeMode) || void 0 === a ? void 0 : a.dataset.type,
                        degreesHours: this._degreesHours,
                        degreesMinutes: this._degreesMinutes
                    }), null !== this.clockFace && this.circle.classList.remove("small-circle")
                }))
            }))
        }, this._handleMinutesClick = ()=> {
            this._clickTouchEvents.forEach((e=> {
                this.minutes.addEventListener(e, (e=> {
                    var i, o, r, s, a, l;
                    const d = e.target;
                    if (null !== this.clockFace && (this._handleAnimationSwitchTipsMode(), this._setMinutesToClock(d.textContent)), "24h" === this._options.clockType && (this._removeCircleClockClasses24h(), this._options.mobile || null === (i = this.tipsWrapperFor24h) || void 0 === i || i.classList.add("timepicker-ui-tips-wrapper-24h-disabled")), d.classList.add("active"), null === (o = this.hour) || void 0 === o || o.classList.remove("active"), "12h" === this._options.clockType && (null === (r = this._options.disabledTime) || void 0 === r ? void 0 : r.interval)) {
                        const e = new T({
                            clockFace: this.clockFace,
                            tipsWrapper: this.tipsWrapper,
                            array: t(this.hour, "active") ? g : _
                        });
                        (null === (s = this._disabledTime) || void 0 === s ? void 0 : s.value.startType) === (null === (a = this._disabledTime) || void 0 === a ? void 0 : a.value.endType) ? setTimeout((()=> {
                            var i, t, n;
                            (null === (i = this._disabledTime) || void 0 === i ? void 0 : i.value.startType) === (null === (t = this.activeTypeMode) || void 0 === t ? void 0 : t.textContent) ? e.updateDisable(Object.assign({hoursToUpdate: null === (n = this._disabledTime) || void 0 === n ? void 0 : n.value.rangeArrHour}, this._getDestructuringObj())) : e.clean()
                        }), 300) : setTimeout((()=> {
                            e.updateDisable(Object.assign({}, this._getDestructuringObj(!0)))
                        }), 300)
                    }
                    n(this._element, "selectminutemode", {
                        hour: this.hour.textContent,
                        minutes: this.minutes.textContent,
                        type: null === (l = this.activeTypeMode) || void 0 === l ? void 0 : l.dataset.type,
                        degreesHours: this._degreesHours,
                        degreesMinutes: this._degreesMinutes
                    })
                }))
            }))
        }, this._handleEventToMoveHand = e=> {
            var s, a, l, d, c, p, h, m, v, b, k, g, _, T, y, f, x, w, C, M, E, H, L, S, N, $, A, O, I, W, j, F, D, q, P, B, V, z, U, Y, R, Z, K, X, J, G, Q, ee, ie, te, ne, oe, re, se, ae, le, de, ue, ce, pe, he, me;
            this._options.preventDefault && e.preventDefault();
            const {target:ve,type:be,touches:ke}=e, ge = ve, {incrementMinutes:_e,incrementHours:Te,switchToMinutesAfterSelectHour:ye}=this._options;
            if (!i(e, this.clockFace))return;
            const fe = i(e, this.clockFace), xe = this.clockFace.offsetWidth / 2;
            let we = fe && Math.atan2(fe.y - xe, fe.x - xe);
            if (o()) {
                const t = i(e, this.clockFace, !0);
                if (!t)return;
                we = Math.atan2(t.y - xe, t.x - xe)
            }
            if ("mouseup" === be || "touchend" === be)return this._isTouchMouseMove = !1, void(ye && (t(ge, "timepicker-ui-value-tips") || t(ge, "timepicker-ui-value-tips-24h") || t(ge, "timepicker-ui-tips-wrapper")) && this.minutes.click());
            if ("mousedown" !== be && "mousemove" !== be && "touchmove" !== be && "touchstart" !== be || "mousedown" !== be && "touchstart" !== be && "touchmove" !== be || ((t(ge, "timepicker-ui-clock-face") || t(ge, "timepicker-ui-circle-hand") || t(ge, "timepicker-ui-hour-time-12") || t(ge, "timepicker-ui-minutes-time") || t(ge, "timepicker-ui-clock-hand") || t(ge, "timepicker-ui-value-tips") || t(ge, "timepicker-ui-value-tips-24h") || t(ge, "timepicker-ui-tips-wrapper") || t(ge, "timepicker-ui-tips-wrapper-24h")) && !t(ge, "timepicker-ui-tips-disabled") ? this._isTouchMouseMove = !0 : this._isTouchMouseMove = !1), !this._isTouchMouseMove)return;
            if (null !== this.minutesTips) {
                this.minutes.classList.add("active");
                let e, i = we && r(Math.trunc(180 * we / Math.PI) + 90, _e, 6);
                if (void 0 === i)return;
                if (i < 0 ? (e = Math.round(360 + i / 6) % 60, i = 360 + 6 * Math.round(i / 6)) : (e = Math.round(i / 6) % 60, i = 6 * Math.round(i / 6)), null === (s = this._disabledTime) || void 0 === s ? void 0 : s.value.isInterval)if ((null === (c = this._disabledTime) || void 0 === c ? void 0 : c.value.endType) === (null === (p = this._disabledTime) || void 0 === p ? void 0 : p.value.startType)) {
                    if ((null === (v = null === (m = null === (h = this._disabledTime) || void 0 === h ? void 0 : h.value) || void 0 === m ? void 0 : m.endMinutes) || void 0 === v ? void 0 : v.includes(e <= 9 ? `0${e}` : `${e}`)) && this.hour.textContent === (null === (k = null === (b = this._disabledTime) || void 0 === b ? void 0 : b.value) || void 0 === k ? void 0 : k.removedEndHour) && (null === (g = this._disabledTime) || void 0 === g ? void 0 : g.value.endType) === (null === (_ = this.activeTypeMode) || void 0 === _ ? void 0 : _.textContent))return;
                    if ((null === (f = null === (y = null === (T = this._disabledTime) || void 0 === T ? void 0 : T.value) || void 0 === y ? void 0 : y.startMinutes) || void 0 === f ? void 0 : f.includes(e <= 9 ? `0${e}` : `${e}`)) && this.hour.textContent === (null === (w = null === (x = this._disabledTime) || void 0 === x ? void 0 : x.value) || void 0 === w ? void 0 : w.removedStartedHour) && (null === (C = this._disabledTime) || void 0 === C ? void 0 : C.value.startType) === (null === (M = this.activeTypeMode) || void 0 === M ? void 0 : M.textContent))return
                } else {
                    if ((null === (E = this.activeTypeMode) || void 0 === E ? void 0 : E.textContent) === (null === (H = this._disabledTime) || void 0 === H ? void 0 : H.value.endType) && ((null === (N = null === (S = null === (L = this._disabledTime) || void 0 === L ? void 0 : L.value) || void 0 === S ? void 0 : S.endMinutes) || void 0 === N ? void 0 : N.includes(e <= 9 ? `0${e}` : `${e}`)) && (null === ($ = this._disabledTime) || void 0 === $ ? void 0 : $.value.removedPmHour) === this.hour.textContent || (null === (A = this._disabledTime) || void 0 === A ? void 0 : A.value.pmHours.map(Number).includes(Number(this.hour.textContent)))))return;
                    if ((null === (O = this.activeTypeMode) || void 0 === O ? void 0 : O.textContent) === (null === (I = this._disabledTime) || void 0 === I ? void 0 : I.value.startType) && ((null === (F = null === (j = null === (W = this._disabledTime) || void 0 === W ? void 0 : W.value) || void 0 === j ? void 0 : j.startMinutes) || void 0 === F ? void 0 : F.includes(e <= 9 ? `0${e}` : `${e}`)) && (null === (D = this._disabledTime) || void 0 === D ? void 0 : D.value.removedAmHour) === this.hour.textContent || (null === (q = this._disabledTime) || void 0 === q ? void 0 : q.value.amHours.map(Number).includes(Number(this.hour.textContent)))))return
                } else if (null === (d = null === (l = null === (a = this._disabledTime) || void 0 === a ? void 0 : a.value) || void 0 === l ? void 0 : l.minutes) || void 0 === d ? void 0 : d.includes(e <= 9 ? `0${e}` : `${e}`))return;
                this.minutes.innerText = e >= 10 ? `${e}` : `0${e}`, this.clockHand.style.transform = `rotateZ(${i}deg)`, this._degreesMinutes = i, this._toggleClassActiveToValueTips(this.minutes.textContent), this._removeBgColorToCirleWithMinutesTips(), this._setBgColorToCircleWithMinutesTips(), n(this._element, "update", Object.assign(Object.assign({}, u(this.input, this._options.clockType)), {
                    degreesHours: this._degreesHours,
                    degreesMinutes: this._degreesMinutes,
                    eventType: be,
                    type: null === (P = this.activeTypeMode) || void 0 === P ? void 0 : P.dataset.type
                }))
            }
            const Ce = ke ? ke[0] : void 0, Me = ke && Ce ? document.elementFromPoint(Ce.clientX, Ce.clientY) : null;
            if (null !== this.hourTips) {
                if (null === (B = this.hour) || void 0 === B || B.classList.add("active"), !t(Me || ge, "timepicker-ui-value-tips-24h") && !t(Me || ge, "timepicker-ui-tips-disabled") && (t(Me || ge, "timepicker-ui-value-tips") || t(Me || ge, "timepicker-ui-tips-wrapper"))) {
                    let e, i = we && r(Math.trunc(180 * we / Math.PI) + 90, Te, 30);
                    if (this._degreesHours = i, void 0 === i)return;
                    i < 0 ? (e = Math.round(360 + i / 30) % 12, i = 360 + i) : (e = Math.round(i / 30) % 12, (0 === e || e > 12) && (e = 12));
                    const t = (null === (V = this._disabledTime) || void 0 === V ? void 0 : V.value.isInterval) ? "rangeArrHour" : "hours";
                    if ((null === (z = this._disabledTime) || void 0 === z ? void 0 : z.value.endType) === (null === (Y = null === (U = this._disabledTime) || void 0 === U ? void 0 : U.value) || void 0 === Y ? void 0 : Y.startType)) {
                        if ("string" == typeof(null === (Z = null === (R = this._disabledTime) || void 0 === R ? void 0 : R.value) || void 0 === Z ? void 0 : Z.endType)) {
                            if ((null === (X = null === (K = this._disabledTime) || void 0 === K ? void 0 : K.value) || void 0 === X ? void 0 : X.endType) === (null === (J = this.activeTypeMode) || void 0 === J ? void 0 : J.textContent) && (null === (Q = null === (G = this._disabledTime) || void 0 === G ? void 0 : G.value) || void 0 === Q ? void 0 : Q.startType) === (null === (ee = this.activeTypeMode) || void 0 === ee ? void 0 : ee.textContent) && (null === (te = null === (ie = this._disabledTime) || void 0 === ie ? void 0 : ie.value[t]) || void 0 === te ? void 0 : te.includes(e.toString())))return
                        } else if (null === (oe = null === (ne = this._disabledTime) || void 0 === ne ? void 0 : ne.value[t]) || void 0 === oe ? void 0 : oe.includes(e.toString()))return
                    } else {
                        if ((null === (re = this._disabledTime) || void 0 === re ? void 0 : re.value.startType) === (null === (se = this.activeTypeMode) || void 0 === se ? void 0 : se.textContent) && (null === (ae = this._disabledTime) || void 0 === ae ? void 0 : ae.value.amHours.includes(e.toString())))return;
                        if ((null === (le = this._disabledTime) || void 0 === le ? void 0 : le.value.endType) === (null === (de = this.activeTypeMode) || void 0 === de ? void 0 : de.textContent) && (null === (ue = this._disabledTime) || void 0 === ue ? void 0 : ue.value.pmHours.includes(e.toString())))return
                    }
                    this._removeCircleClockClasses24h(), this.clockHand.style.transform = `rotateZ(${i}deg)`, this.hour.innerText = e > 9 ? `${e}` : `0${e}`, this._toggleClassActiveToValueTips(e)
                }
                if ((t(Me || ge, "timepicker-ui-value-tips-24h") || t(Me || ge, "timepicker-ui-tips-wrapper-24h")) && !t(Me || ge, "timepicker-ui-tips-disabled")) {
                    let e, i = we && r(Math.trunc(180 * we / Math.PI) + 90, Te, 30);
                    if (this._degreesHours = i, void 0 === i)return;
                    i < 0 ? (e = Math.round(360 + i / 30) % 24, i = 360 + i) : (e = Math.round(i / 30) + 12, 12 === e && (e = "00"));
                    const t = (null === (ce = this._disabledTime) || void 0 === ce ? void 0 : ce.value.isInterval) ? "rangeArrHour" : "hours";
                    if (null === (he = null === (pe = this._disabledTime) || void 0 === pe ? void 0 : pe.value[t]) || void 0 === he ? void 0 : he.includes(e.toString()))return;
                    this._setCircleClockClasses24h(), this.clockHand.style.transform = `rotateZ(${i}deg)`, this.hour.innerText = `${e}`, this._toggleClassActiveToValueTips(e)
                }
                n(this._element, "update", Object.assign(Object.assign({}, u(this.input, this._options.clockType)), {
                    degreesHours: this._degreesHours,
                    degreesMinutes: this._degreesMinutes,
                    eventType: be,
                    type: null === (me = this.activeTypeMode) || void 0 === me ? void 0 : me.dataset.type
                }))
            }
        }, this._toggleClassActiveToValueTips = e=> {
            const i = this.allValueTips.find((i=>Number(i.innerText) === Number(e)));
            this.allValueTips.map((e=>e.classList.remove("active"))), void 0 !== i && i.classList.add("active")
        }, this._handleMoveHand = ()=> {
            this._options.mobile || this._isMobileView || b.split(" ").forEach((e=> {
                "touchstart" === e || "touchmove" === e || "touchend" === e ? document.addEventListener(e, this._mutliEventsMoveHandler, {passive: !1}) : document.addEventListener(e, this._mutliEventsMoveHandler, !1)
            }))
        }, this._setModalTemplate = ()=> {
            if (!this._options)return;
            const {appendModalSelector:e}=this._options;
            if ("" !== e && e) {
                const i = null === document || void 0 === document ? void 0 : document.querySelector(e);
                null == i || i.insertAdjacentHTML("beforeend", this.modalTemplate)
            } else document.body.insertAdjacentHTML("afterend", this.modalTemplate)
        }, this._setScrollbarOrNot = ()=> {
            this._options.enableScrollbar ? setTimeout((()=> {
                document.body.style.overflowY = "", document.body.style.paddingRight = ""
            }), 400) : (document.body.style.paddingRight = `${(()=> {
                const e = document.createElement("div");
                e.className = "timepicker-ui-measure", document.body.appendChild(e);
                const i = e.getBoundingClientRect().width - e.clientWidth;
                return document.body.removeChild(e), i
            })()}px`, document.body.style.overflowY = "hidden")
        }, this._setAnimationToOpen = ()=> {
            var e, i;
            null === (e = this.modalElement) || void 0 === e || e.classList.add("opacity"), this._options.animation ? setTimeout((()=> {
                var e;
                null === (e = this.modalElement) || void 0 === e || e.classList.add("show")
            }), 150) : null === (i = this.modalElement) || void 0 === i || i.classList.add("show")
        }, this._removeAnimationToClose = ()=> {
            var e;
            this.modalElement && (this._options.animation ? setTimeout((()=> {
                var e;
                null === (e = this.modalElement) || void 0 === e || e.classList.remove("show")
            }), 150) : null === (e = this.modalElement) || void 0 === e || e.classList.remove("show"))
        }, this._handlerViewChange = ()=>e(this, void 0, void 0, (function*() {
            var e, i, n, o;
            const {clockType:r}=this._options;
            if (t(this.modalElement, "mobile")) {
                const e = c(this.hour.textContent, "hour", r), t = c(this.minutes.textContent, "minutes", r);
                if (!1 === e || !1 === t)return t || this.minutes.classList.add("invalid-value"), void(e || null === (i = this.hour) || void 0 === i || i.classList.add("invalid-value"));
                !0 === e && !0 === t && (t && this.minutes.classList.remove("invalid-value"), e && (null === (n = this.hour) || void 0 === n || n.classList.remove("invalid-value"))), this.close(), this._isMobileView = !1, this._options.mobile = !1;
                const s = this.hour.textContent, a = this.minutes.textContent, l = null === (o = this.activeTypeMode) || void 0 === o ? void 0 : o.dataset.type;
                setTimeout((()=> {
                    this._eventsBundle(), (Number(s) > 12 || 0 === Number(s)) && this._setCircleClockClasses24h(), this._isMobileView = !0, this._options.mobile = !0, this._options.preventDefault = !0, this._options.editable = !1, this.hour.textContent = s, this.minutes.textContent = a;
                    const e = [...document.querySelectorAll(".timepicker-ui-type-mode")];
                    null == e || e.map((e=>e.classList.remove("active")));
                    const i = e.find((e=>e.textContent === l));
                    null == i || i.classList.add("active"), this._setTransformToCircleWithSwitchesHour(this.hour.textContent), this._toggleClassActiveToValueTips(this.hour.textContent)
                }), 300)
            } else {
                this.close(), this._isMobileView = !0, this._options.mobile = !0, this._options.preventDefault = !1, this._options.editable = !0;
                const i = this.hour.textContent, t = this.minutes.textContent, n = null === (e = this.activeTypeMode) || void 0 === e ? void 0 : e.dataset.type;
                setTimeout((()=> {
                    this._eventsBundle(), this._isMobileView = !1, this._options.mobile = !1, this._options.preventDefault = !0, this._options.editable = !0, this.hour.textContent = i, this.minutes.textContent = t;
                    const e = [...document.querySelectorAll(".timepicker-ui-type-mode")];
                    null == e || e.map((e=>e.classList.remove("active")));
                    const o = e.find((e=>e.textContent === n));
                    null == o || o.classList.add("active")
                }), 300)
            }
        })), this._handleIconChangeView = ()=>e(this, void 0, void 0, (function*() {
            this._options.enableSwitchIcon && (o() ? this.keyboardClockIcon.addEventListener("touchstart", this._handlerViewChange) : this.keyboardClockIcon.addEventListener("click", this._handlerViewChange))
        })), this._handlerClickHourMinutes = i=>e(this, void 0, void 0, (function*() {
            var e, n, o;
            if (!this.modalElement)return;
            const {clockType:r,editable:s}=this._options, a = i.target, l = null === (e = this.modalElement) || void 0 === e ? void 0 : e.querySelectorAll("[contenteditable]"), d = c(this.hour.textContent, "hour", r), u = c(this.minutes.textContent, "minutes", r);
            if (s)if (t(a, "timepicker-ui-hour") || t(a, "timepicker-ui-minutes"))!1 !== d && !1 !== u || (u || this.minutes.classList.add("invalid-value"), d || null === (o = this.hour) || void 0 === o || o.classList.add("invalid-value")), a.contentEditable = "true"; else {
                Array.from(l).forEach((e=> {
                    const i = e;
                    i.contentEditable = "false", i.classList.remove("active")
                })), !0 === d && !0 === u && (u && this.minutes.classList.remove("invalid-value"), d && (null === (n = this.hour) || void 0 === n || n.classList.remove("invalid-value"))), this.minutesTips ? this._setMinutesToClock(this.minutes.textContent) : this.hourTips && this._setHoursToClock(this.hour.textContent)
            }
        })), this._handleClickOnHourMobile = ()=> {
            document.addEventListener("mousedown", this._eventsClickMobileHandler), document.addEventListener("touchstart", this._eventsClickMobileHandler)
        }, this._handleKeyPress = e=> {
            "Escape" === e.key && this.modalElement && this.close()
        }, this._handleEscClick = ()=> {
            document.addEventListener("keydown", this._handleKeyPress)
        }, this._focusTrapHandler = ()=> {
            setTimeout((()=> {
                const e = this.wrapper.querySelectorAll('div[tabindex="0"]:not([disabled])'), i = e[0], n = e[e.length - 1];
                this.wrapper.focus(), this.wrapper.addEventListener("keydown", (({key:e,shiftKey:o,target:r})=> {
                    const s = r;
                    if ("Tab" === e && (o ? document.activeElement === i && n.focus() : document.activeElement === n && i.focus()), "Enter" === e && (t(s, "timepicker-ui-minutes") && this.minutes.click(), t(s, "timepicker-ui-hour") && this.hour.click(), t(s, "timepicker-ui-cancel-btn") && this.cancelButton.click(), t(s, "timepicker-ui-ok-btn") && this.okButton.click(), t(s, "timepicker-ui-keyboard-icon-wrapper") && this.keyboardClockIcon.click(), t(s, "timepicker-ui-am") && this.AM.click(), t(s, "timepicker-ui-pm") && this.PM.click(), t(s, "timepicker-ui-value-tips") || t(s, "timepicker-ui-value-tips-24h"))) {
                        const {left:e,top:i,x:n,y:o,width:r,height:a}=s.getBoundingClientRect(), l = document.elementFromPoint(n, o), d = ()=> {
                            var n;
                            const o = new MouseEvent("mousedown", {
                                clientX: e + r / 2,
                                clientY: i + a / 2,
                                cancelable: !0,
                                bubbles: !0
                            });
                            t(l, "timepicker-ui-value-tips-24h") ? null == l || l.dispatchEvent(o) : null === (n = null == l ? void 0 : l.childNodes[0]) || void 0 === n || n.dispatchEvent(o), this._isTouchMouseMove = !1
                        };
                        d()
                    }
                    setTimeout((()=> {
                        this.wrapper.addEventListener("mousedown", (()=>document.activeElement.blur()))
                    }), 100)
                }))
            }), 301)
        }, this._handleOpenOnEnterFocus = ()=> {
            this.input.addEventListener("keydown", (({target:e,key:i})=> {
                e.disabled || "Enter" === i && this.open()
            }))
        }, this._element = s, this._cloned = null, this._options = ((e, i)=>Object.assign(Object.assign({}, i), e))(Object.assign(Object.assign({}, a), (e=> {
            if (!e)return;
            const i = JSON.parse(JSON.stringify(e)), t = Object.keys(i);
            return Object.values(i).reduce(((e, i, n)=>(Number(i) ? e[t[n]] = Number(i) : e[t[n]] = "true" === i || "false" === i ? JSON.parse(i) : i, e)), {})
        })(null === (h = this._element) || void 0 === h ? void 0 : h.dataset)), v), this._isTouchMouseMove = !1, this._degreesHours = 30 * Number(u(null === (y = this._element) || void 0 === y ? void 0 : y.querySelector("input"), this._options.clockType).hour), this._degreesMinutes = 6 * Number(u(null === (f = this._element) || void 0 === f ? void 0 : f.querySelector("input"), this._options.clockType).minutes), this._isMobileView = !1, this._mutliEventsMove = e=>this._handleEventToMoveHand(e), this._mutliEventsMoveHandler = this._mutliEventsMove.bind(this), this._eventsClickMobile = e=>this._handlerClickHourMinutes(e), this._eventsClickMobileHandler = this._eventsClickMobile.bind(this), this._checkMobileOption(), this._clickTouchEvents = ["click", "touchstart"], this._disabledTime = null, this._preventClockTypeByCurrentTime()
    }

    get modalTemplate() {
        return this._options.mobile && this._isMobileView ? (e=> {
            const {mobileTimeLabel:i,amLabel:t,pmLabel:n,cancelLabel:o,okLabel:r,iconTemplateMobile:s,minuteMobileLabel:a,hourMobileLabel:l,enableSwitchIcon:d,animation:u,clockType:c}=e;
            return `\n  <div class="timepicker-ui-modal normalize mobile" role="dialog" style='transition:${u ? "opacity 0.15s linear" : "none"}'>\n    <div class="timepicker-ui-wrapper mobile" tabindex="0">\n      <div class="timepicker-ui-header mobile">\n        <div class="timepicker-ui-select-time mobile">${i}</div>\n        <div class="timepicker-ui-wrapper-time mobile">\n          <div class="timepicker-ui-hour mobile" contenteditable="false" tabindex="0"></div>  \n          <div class="timepicker-ui-hour-text mobile">${l}</div>\n          <div class="timepicker-ui-dots mobile">:</div>  \n          <div class="timepicker-ui-minute-text mobile">${a}</div>\n          <div class="timepicker-ui-minutes mobile" contenteditable="false" tabindex="0"></div>   \n        </div>\n  ${"24h" !== c ? `<div class="timepicker-ui-wrapper-type-time mobile">\n          <div class="timepicker-ui-type-mode timepicker-ui-am mobile" data-type="AM" tabindex="0">${t}</div>    \n          <div class="timepicker-ui-type-mode timepicker-ui-pm mobile" data-type="PM" tabindex="0">${n}</div>    \n        </div>` : ""}\n      </div>\n      <div class="timepicker-ui-footer mobile" data-view="mobile">\n      ${d ? `\n      <div class="timepicker-ui-keyboard-icon-wrapper mobile" role="button" aria-pressed="false" data-view="desktop" tabindex="0">\n      ${s}\n      </div>` : ""}\n      <div class="timepicker-ui-wrapper-btn mobile">\n        <div class="timepicker-ui-cancel-btn mobile" role="button" aria-pressed="false" tabindex="0">${o}</div>\n        <div class="timepicker-ui-ok-btn mobile" role="button" aria-pressed="false" tabindex="0">${r}</div>\n      </div>\n      </div>\n    </div>  \n  </div>`
        })(this._options) : (e=> {
            const {iconTemplate:i,timeLabel:t,amLabel:n,pmLabel:o,cancelLabel:r,okLabel:s,enableSwitchIcon:a,animation:l,editable:d,clockType:u}=e;
            return `\n  <div class="timepicker-ui-modal normalize" role="dialog" style='transition:${l ? "opacity 0.15s linear" : "none"}'>\n    <div class="timepicker-ui-wrapper" tabindex="0">\n      <div class="timepicker-ui-header">\n        <div class="timepicker-ui-select-time">${t}</div>\n        <div class="timepicker-ui-wrapper-time ${"24h" === u ? "timepicker-ui-wrapper-time-24h" : ""}">\n          <div class="timepicker-ui-hour" tabindex="0" role="button" contenteditable="${!!d}"></div>  \n          <div class="timepicker-ui-dots">:</div>    \n          <div class="timepicker-ui-minutes" tabindex="0" role="button" contenteditable="${!!d}"></div>   \n        </div>\n      ${"24h" !== u ? `\n      <div class="timepicker-ui-wrapper-type-time">\n        <div class="timepicker-ui-type-mode timepicker-ui-am" tabindex="0" role="button" data-type="AM">${n}</div>    \n        <div class="timepicker-ui-type-mode timepicker-ui-pm" tabindex="0" role="button" data-type="PM">${o}</div>    \n      </div>\n      ` : ""}\n      </div>\n      <div class="timepicker-ui-wrapper-landspace">\n        <div class="timepicker-ui-body">\n          <div class="timepicker-ui-clock-face">\n            <div class="timepicker-ui-dot"></div>\n            <div class="timepicker-ui-clock-hand">\n              <div class="timepicker-ui-circle-hand"></div>\n            </div>\n            <div class="timepicker-ui-tips-wrapper"></div>\n            ${"24h" === u ? '<div class="timepicker-ui-tips-wrapper-24h"></div>' : ""}\n          </div>\n        </div>\n        <div class="timepicker-ui-footer">\n        ${a ? `\n      <div class="timepicker-ui-keyboard-icon-wrapper" tabindex="0" role="button" aria-pressed="false" data-view="desktop">\n        ${i}\n      </div>` : ""}\n        <div class="timepicker-ui-wrapper-btn" >\n          <div class="timepicker-ui-cancel-btn" tabindex="0" role="button" aria-pressed="false">${r}</div>\n          <div class="timepicker-ui-ok-btn" tabindex="0" role="button" aria-pressed="false">${s}</div>\n        </div>\n        </div>\n      </div>\n    </div>  \n  </div>`
        })(this._options)
    }

    get modalElement() {
        return document.querySelector(".timepicker-ui-modal")
    }

    get clockFace() {
        return document.querySelector(".timepicker-ui-clock-face")
    }

    get input() {
        var e;
        return null === (e = this._element) || void 0 === e ? void 0 : e.querySelector("input")
    }

    get clockHand() {
        return document.querySelector(".timepicker-ui-clock-hand")
    }

    get circle() {
        return document.querySelector(".timepicker-ui-circle-hand")
    }

    get tipsWrapper() {
        return document.querySelector(".timepicker-ui-tips-wrapper")
    }

    get tipsWrapperFor24h() {
        return document.querySelector(".timepicker-ui-tips-wrapper-24h")
    }

    get minutes() {
        return document.querySelector(".timepicker-ui-minutes")
    }

    get hour() {
        return document.querySelector(".timepicker-ui-hour")
    }

    get AM() {
        return document.querySelector(".timepicker-ui-am")
    }

    get PM() {
        return document.querySelector(".timepicker-ui-pm")
    }

    get minutesTips() {
        return document.querySelector(".timepicker-ui-minutes-time")
    }

    get hourTips() {
        return document.querySelector(".timepicker-ui-hour-time-12")
    }

    get allValueTips() {
        return [...document.querySelectorAll(".timepicker-ui-value-tips"), ...document.querySelectorAll(".timepicker-ui-value-tips-24h")]
    }

    get openElementData() {
        var e;
        const i = null === (e = this._element) || void 0 === e ? void 0 : e.querySelectorAll("[data-open]");
        if ((null == i ? void 0 : i.length) > 0) {
            const e = [];
            return i.forEach((({dataset:i})=> {
                var t;
                return e.push(null !== (t = i.open) && void 0 !== t ? t : "")
            })), [...new Set(e)]
        }
        return null
    }

    get openElement() {
        var e, i;
        return null === this.openElementData ? (null === (e = this.input) || void 0 === e || e.setAttribute("data-open", "timepicker-ui-input"), [this.input]) : null !== (i = this.openElementData.map((e=> {
            var i;
            return null === (i = this._element) || void 0 === i ? void 0 : i.querySelectorAll(`[data-open='${e}']`)
        }))[0]) && void 0 !== i ? i : ""
    }

    get cancelButton() {
        return document.querySelector(".timepicker-ui-cancel-btn")
    }

    get okButton() {
        return document.querySelector(".timepicker-ui-ok-btn")
    }

    get activeTypeMode() {
        return document.querySelector(".timepicker-ui-type-mode.active")
    }

    get keyboardClockIcon() {
        return document.querySelector(".timepicker-ui-keyboard-icon-wrapper")
    }

    get footer() {
        return document.querySelector(".timepicker-ui-footer")
    }

    get wrapper() {
        return document.querySelector(".timepicker-ui-wrapper")
    }

    _checkDisabledValuesOnStart() {
        if (!this._options.disabledTime || this._options.disabledTime.interval)return;
        const {disabledTime:{hours:e,minutes:i},clockType:t}=this._options, n = !e || p(e, "hour", t), o = !i || p(i, "minutes", t);
        if (!n || !o)throw new Error("You set wrong hours or minutes in disabled option")
    }

    _checkMobileOption() {
        this._options.mobile ? (this._isMobileView = !0, this._options.editable = !0) : this._options && !this._options.preventDefault ? this._options.editable = !0 : (this._isMobileView = !1, this._options.editable = !1)
    }

    _getDisableTime() {
        this._disabledTime = (e=> {
            if (!e)return;
            const {disabledTime:i,clockType:t}=e;
            if (!i || Object.keys(i).length <= 0 || "Object" !== i.constructor.name)return;
            const {hours:n,interval:o,minutes:r}=i;
            if (o) {
                delete i.hours, delete i.minutes;
                const [e,n]=o.toString().split("-"), {hour:r,minutes:l,type:d}=u({value: e.trimEnd()}, t), {hour:c,minutes:p,type:h}=u({value: n.trimEnd().trimStart()}, t);
                let m = s(r, c).map((e=>"00" === e || 0 === Number(e) ? `0${Number(e)}` : `${Number(e)}`));
                const v = [], b = Number(l), k = Number(p);
                if (h === d)return b > 0 && k <= 0 ? (v.push(m[0], m[m.length - 1]), m = m.slice(1, -1)) : k < 59 && k > 0 && b <= 0 ? (v.push(void 0, m[m.length - 1]), m = m.slice(0, -1)) : k > 0 && b > 0 ? (v.push(m[0], m[m.length - 1]), m = m.slice(1, -1)) : 0 === k && 0 === b && (v.push(void 0, m[m.length - 1]), m.pop()), {
                    value: {
                        removedStartedHour: Number(v[0]) <= 9 ? `0${v[0]}` : v[0],
                        removedEndHour: Number(v[1]) <= 9 ? `0${v[1]}` : v[1],
                        rangeArrHour: m,
                        isInterval: !0,
                        startMinutes: s(l, 59).map((e=>Number(e) <= 9 ? `0${e}` : `${e}`)),
                        endMinutes: a(0, p).map((e=>Number(e) <= 9 ? `0${e}` : `${e}`)),
                        endType: h,
                        startType: d
                    }
                };
                {
                    const e = s(r, 12).map(String), i = a(1, c).map(String), t = [], n = [];
                    return b > 0 && k <= 0 ? (t.push(i[i.length - 1]), n.push(e[0]), i.splice(-1, 1), e.splice(0, 1)) : k < 59 && k > 0 && b <= 0 ? (n.push(e[0]), t.push(i[i.length - 1]), i.splice(-1, 1)) : k > 0 && b > 0 ? (t.push(i[i.length - 1]), n.push(e[0]), i.splice(-1, 1), e.splice(0, 1)) : 0 === k && 0 === b && (t.push(i[i.length - 1]), n.push(e[0]), i.pop()), {
                        value: {
                            isInterval: !0,
                            endType: h,
                            startType: d,
                            pmHours: i,
                            amHours: e,
                            startMinutes: 0 === Number(l) ? [] : s(l, 59).map((e=>Number(e) <= 9 ? `0${e}` : `${e}`)),
                            endMinutes: a(0, p).map((e=>Number(e) <= 9 ? `0${e}` : `${e}`)),
                            removedAmHour: Number(n[0]) <= 9 ? `0${n[0]}` : n[0],
                            removedPmHour: Number(t[0]) <= 9 ? `0${t[0]}` : t[0]
                        }
                    }
                }
            }
            return null == n || n.forEach((e=> {
                if ("12h" === t && Number(e) > 12)throw new Error("The disabled hours value has to be less than 13");
                if ("24h" === t && Number(e) > 23)throw new Error("The disabled hours value has to be less than 24")
            })), null == r || r.forEach((e=> {
                if (Number(e) > 59)throw new Error("The disabled minutes value has to be less than 60")
            })), {
                value: {
                    hours: null == n ? void 0 : n.map((e=>"00" === e || 0 === Number(e) ? `0${Number(e)}` : `${Number(e)}`)),
                    minutes: null == r ? void 0 : r.map((e=>Number(e) <= 9 ? `0${e}` : `${e}`))
                }
            }
        })(this._options)
    }

    _removeCircleClockClasses24h() {
        var e, i;
        null === (e = this.circle) || void 0 === e || e.classList.remove("timepicker-ui-circle-hand-24h"), null === (i = this.clockHand) || void 0 === i || i.classList.remove("timepicker-ui-clock-hand-24h")
    }

    _setCircleClockClasses24h() {
        this.circle.classList.add("timepicker-ui-circle-hand-24h"), this.clockHand.classList.add("timepicker-ui-clock-hand-24h")
    }

    _setErrorHandler() {
        var e, i, t, o;
        const {error:r,currentHour:s,currentMin:a,currentType:l,currentLength:d}=u(this.input, this._options.clockType);
        if (r) {
            const u = document.createElement("div");
            throw null === (e = this.input) || void 0 === e || e.classList.add("timepicker-ui-invalid-format"), u.classList.add("timepicker-ui-invalid-text"), u.innerHTML = "<b>Invalid Time Format</b>", (null === (i = this.input) || void 0 === i ? void 0 : i.parentElement) && null === (null === (t = this.input) || void 0 === t ? void 0 : t.parentElement.querySelector(".timepicker-ui-invalid-text")) && (null === (o = this.input) || void 0 === o || o.after(u)), n(this._element, "geterror", {
                error: r,
                currentHour: s,
                currentMin: a,
                currentType: l,
                currentLength: d
            }), new Error(`Invalid Time Format: ${r}`)
        }
    }

    _removeErrorHandler() {
        var e, i;
        null === (e = this.input) || void 0 === e || e.classList.remove("timepicker-ui-invalid-format");
        const t = null === (i = this._element) || void 0 === i ? void 0 : i.querySelector(".timepicker-ui-invalid-text");
        t && t.remove()
    }

    _setOnStartCSSClassesIfClockType24h() {
        if ("24h" === this._options.clockType) {
            let {hour:e}=u(this.input, this._options.clockType, this._options.currentTime);
            this.input.value.length > 0 && (e = this.input.value.split(":")[0]), (Number(e) > 12 || 0 === Number(e)) && this._setCircleClockClasses24h()
        }
    }

    _getDestructuringObj(e) {
        var i;
        const {endMinutes:t,removedEndHour:n,removedStartedHour:o,startMinutes:r,pmHours:s,amHours:a,removedAmHour:l,removedPmHour:d}=this._disabledTime.value;
        return e ? {
            minutesToUpdate: {
                actualHour: this.hour.textContent,
                pmHours: s,
                amHours: a,
                activeMode: null === (i = this.activeTypeMode) || void 0 === i ? void 0 : i.textContent,
                startMinutes: r,
                endMinutes: t,
                removedAmHour: l,
                removedPmHour: d
            }
        } : {
            minutesToUpdate: {
                endMinutes: t,
                removedEndHour: n,
                removedStartedHour: o,
                actualHour: this.hour.textContent,
                startMinutes: r
            }
        }
    }
};
