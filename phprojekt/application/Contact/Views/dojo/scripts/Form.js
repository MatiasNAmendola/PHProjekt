/**
 * This software is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License version 2.1 as published by the Free Software Foundation
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * @copyright  Copyright (c) 2008 Mayflower GmbH (http://www.mayflower.de)
 * @license    LGPL 2.1 (See LICENSE file)
 * @version    $Id$
 * @author     Gustavo Solt <solt@mayflower.de>
 * @package    PHProjekt
 * @link       http://www.phprojekt.com
 * @since      File available since Release 6.0
 */

dojo.provide("phpr.Contact.Form");

dojo.declare("phpr.Contact.Form", phpr.Default.Form, {

    initData:function() {
        // Get all the active users
        this.userStore = new phpr.Store.User();
        this._initData.push({'store': this.userStore});
    },

    addModuleTabs:function(data) {
        this.addHistoryTab();
    },

    addBasicFields:function() {
    },

    submitForm:function() {
        if (!this.prepareSubmission()) {
            return false;
        }

        phpr.send({
            url:       phpr.webpath + 'index.php/' + phpr.module + '/index/jsonSave/id/' + this.id,
            content:   this.sendData,
            onSuccess: dojo.hitch(this, function(data) {
                new phpr.handleResponse('serverFeedback', data);
                if (!this.id) {
                    this.id = data['id'];
                }
                if (data.type == 'success') {
                    this.publish("updateCacheData");
                    this.publish("setUrlHash", [phpr.module]);
                }
            })
        });
    },

    deleteForm:function() {
        phpr.send({
            url:       phpr.webpath + 'index.php/' + phpr.module + '/index/jsonDelete/id/' + this.id,
            onSuccess: dojo.hitch(this, function(data) {
                new phpr.handleResponse('serverFeedback', data);
                if (data.type == 'success') {
                    this.publish("updateCacheData");
                    this.publish("setUrlHash", [phpr.module]);
                }
            })
        });
    },

    updateData:function() {
        phpr.DataStore.deleteData({url: this._url});
    }
});
