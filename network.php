local network = {} 

network.Send = function(self, eventName, ...)
    local remote = game:GetService("ReplicatedStorage").Remotes[eventName]
    if remote and remote.InvokeServer then
        return remote:InvokeServer(...)
    end
    return nil
end

return network
