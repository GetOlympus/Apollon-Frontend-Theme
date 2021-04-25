/*!
 * @package olympus-dionysos
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

'use strict';

module.exports = function (grunt) {
    var opts = {
        name: 'olympus-apollon',
        lang: 'languages/',
        srcs: './src/'
    };

    // works on JSONS
    var srcs = opts.srcs + opts.lang,
        jsons = grunt.file.expand({filter: "isFile"}, srcs + '*.json');

    // read all files and generate PO files
    jsons.forEach(function (jsonfile) {
        var name = jsonfile.split('/').pop().split('.')[0],
            json = grunt.file.readJSON(srcs + name + '.json');

        var text = "";

        for (var item in json) {
            text += 'msgid "' + item + '"' + "\r\n";
            text += 'msgstr "' + json[item].replace(/"/g, '\\"') + '"' + "\r\n";
            text += "\r\n";
        }

        grunt.file.write('./' + opts.lang + opts.name + '-' + name + '.po', text);

        if ("en_US" === name) {
            grunt.file.write('./' + opts.lang + opts.name + '-default.po', text);
        }
    });

    // initialize configuration
    grunt.initConfig({
        potomo: {
            dist: {
                options: {
                    poDel: true
                },
                files: [{
                    cwd: './' + opts.lang,
                    dest: './' + opts.lang,
                    expand: true,
                    ext: '.mo',
                    src: '*.po'
                }]
            }
        }
    });

    // load grunt config
    grunt.loadNpmTasks('grunt-potomo');
    grunt.registerTask('default', ['potomo']);
};
