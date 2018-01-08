const buildConfig = env => require(`./webpack/${env}.js`)({ env });

module.exports = buildConfig;
