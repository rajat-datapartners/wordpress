import { addQueryArgs } from "@wordpress/url";

/** @type {import("../index").RuntimeSdk}  */
export const NewfoldRuntime = {
  hasCapability(name) {
    return window.NewfoldRuntime?.capabilities[name] === true;
  },
  adminUrl(path) {
    return window.NewfoldRuntime?.admin_url + path;
  },
  createApiUrl(url, qs = {}) {
    return addQueryArgs(window.NewfoldRuntime?.base_url, {
      rest_route: url,
      ...qs,
    });
  },
  get siteDetails() {
    return window.NewfoldRuntime?.site;
  },
  get sdk() {
    return window.NewfoldRuntime?.sdk;
  },
  get isWoo() {
    return window.NewfoldRuntime?.isWoocommerceActive;
  },
  get isYithBooking() {
    return window.NewfoldRuntime?.isYithBookingActive;
  },
  get ecommerce() {
    return window.NewfoldRuntime?.ecommerce;
  },
  get plugin() {
    return window.NewfoldRuntime?.plugin;
  },
  get wpversion() {
    return window.NewfoldRuntime?.wpversion;
  },
  get siteTitle() {
    return window.NewfoldRuntime?.siteTitle;
  },
  get currentTheme() {
    return window.NewfoldRuntime?.currentTheme;
  }
};
