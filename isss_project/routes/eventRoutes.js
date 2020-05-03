const mongoose = require('mongoose');
const Event = mongoose.model('events');

module.exports = (app) => {

    app.get(`/api/events`, async (req, res) => {
        let events = await Event.find();
        return res.status(200).send(events);
    });

    app.post(`/api/events`, async (req, res) => {
        let event = await Event.create(req.body);
        return res.status(201).send({
            error: false,
            event
        })
    })

    app.put(`/api/event/:id`, async (req, res) => {
        const {id} = req.params;

        let event = await Event.findByIdAndUpdate(id, req.body);

        return res.status(202).send({
            error: false,
            event
        })

    });

    app.delete(`/api/event/:id`, async (req, res) => {
        const {id} = req.params;

        let event = await Event.findByIdAndDelete(id);

        return res.status(202).send({
            error: false,
            event
        })

    })

}