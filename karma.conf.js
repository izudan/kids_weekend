module.exports = function(config) {
  config.set({
    basePath: '',
    frameworks: ['browserify', 'mocha', 'chai'],
    files: [
      'resource/assets/js/utils/test/test.js'
    ],
    preprocessors: {
      'resource/assets/js/utils/test/test.js': ['browserify']
    },
    reporters: ['progress'],
    colors: true,
    browsers: ['PhantomJS'],
    singleRun: true,
    reporters: ["spec"]
  })
}