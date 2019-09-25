# -*- coding: utf-8 -*-
from odoo import http

# class OpaData(http.Controller):
#     @http.route('/opa_data/opa_data/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/opa_data/opa_data/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('opa_data.listing', {
#             'root': '/opa_data/opa_data',
#             'objects': http.request.env['opa_data.opa_data'].search([]),
#         })

#     @http.route('/opa_data/opa_data/objects/<model("opa_data.opa_data"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('opa_data.object', {
#             'object': obj
#         })