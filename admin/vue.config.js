module.exports = {
  publicPath:
    process.env.NODE_ENV === "production"
      ? "/qtmart.com.vn/"
      : "/",
  transpileDependencies: ["vuetify"],

  pluginOptions: {
    i18n: {
      locale: "vn",
      fallbackLocale: "vn",
      localeDir: "locales",
      enableInSFC: true,
    },
  },
};
